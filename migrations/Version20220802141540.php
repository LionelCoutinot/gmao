<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802141540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B2604144C78 FOREIGN KEY (typeintervention_id) REFERENCES typeintervention (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B26039DE3B35 FOREIGN KEY (typepanne_id) REFERENCES typepanne (id)');
        $this->addSql('CREATE INDEX IDX_3885B2604144C78 ON panne (typeintervention_id)');
        $this->addSql('CREATE INDEX IDX_3885B26039DE3B35 ON panne (typepanne_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B2604144C78');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B26039DE3B35');
        $this->addSql('DROP INDEX IDX_3885B2604144C78 ON panne');
        $this->addSql('DROP INDEX IDX_3885B26039DE3B35 ON panne');
    }
}
