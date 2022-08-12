<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220811231050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE arret (id INT AUTO_INCREMENT NOT NULL, arret VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE criticite (id INT AUTO_INCREMENT NOT NULL, criticite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE machine (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, miseservice DATE NOT NULL, caracteristique LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panne (id INT AUTO_INCREMENT NOT NULL, machine_id INT NOT NULL, criticite_id INT NOT NULL, arret_id INT NOT NULL, typeintervention_id INT NOT NULL, typepanne_id INT NOT NULL, debutarret DATETIME DEFAULT NULL, finarret DATETIME DEFAULT NULL, demandeur VARCHAR(255) NOT NULL, intervenant VARCHAR(255) NOT NULL, dureeintervention TIME NOT NULL, travaux LONGTEXT NOT NULL, INDEX IDX_3885B260F6B75B26 (machine_id), INDEX IDX_3885B260C141C0A0 (criticite_id), INDEX IDX_3885B26068F1C150 (arret_id), INDEX IDX_3885B2604144C78 (typeintervention_id), INDEX IDX_3885B26039DE3B35 (typepanne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typeintervention (id INT AUTO_INCREMENT NOT NULL, typeintervention VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typepanne (id INT AUTO_INCREMENT NOT NULL, typepanne VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B260F6B75B26 FOREIGN KEY (machine_id) REFERENCES machine (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B260C141C0A0 FOREIGN KEY (criticite_id) REFERENCES criticite (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B26068F1C150 FOREIGN KEY (arret_id) REFERENCES arret (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B2604144C78 FOREIGN KEY (typeintervention_id) REFERENCES typeintervention (id)');
        $this->addSql('ALTER TABLE panne ADD CONSTRAINT FK_3885B26039DE3B35 FOREIGN KEY (typepanne_id) REFERENCES typepanne (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B26068F1C150');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B260C141C0A0');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B260F6B75B26');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B2604144C78');
        $this->addSql('ALTER TABLE panne DROP FOREIGN KEY FK_3885B26039DE3B35');
        $this->addSql('DROP TABLE arret');
        $this->addSql('DROP TABLE criticite');
        $this->addSql('DROP TABLE machine');
        $this->addSql('DROP TABLE panne');
        $this->addSql('DROP TABLE typeintervention');
        $this->addSql('DROP TABLE typepanne');
        $this->addSql('DROP TABLE utilisateur');
    }
}
