<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802141017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B260F6B75B26 FOREIGN KEY (machine_id) REFERENCES machine (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B260C141C0A0 FOREIGN KEY (criticite_id) REFERENCES criticite (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B26068F1C150 FOREIGN KEY (arret_id) REFERENCES arret (id)');
        $this->addSql('CREATE INDEX IDX_3885B260F6B75B26 ON panne (machine_id)');
        $this->addSql('CREATE INDEX IDX_3885B260C141C0A0 ON panne (criticite_id)');
        $this->addSql('CREATE INDEX IDX_3885B26068F1C150 ON panne (arret_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B260F6B75B26');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B260C141C0A0');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B26068F1C150');
        $this->addSql('DROP INDEX IDX_3885B260F6B75B26 ON panne');
        $this->addSql('DROP INDEX IDX_3885B260C141C0A0 ON panne');
        $this->addSql('DROP INDEX IDX_3885B26068F1C150 ON panne');
    }
}
