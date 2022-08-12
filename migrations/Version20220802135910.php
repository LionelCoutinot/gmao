<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802135910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE panne (id INT AUTO_INCREMENT NOT NULL, machine_id INT NOT NULL, criticite_id INT NOT NULL, arret_id INT NOT NULL, debutarret DATETIME DEFAULT NULL, finarret DATETIME DEFAULT NULL, demandeur VARCHAR(255) NOT NULL, intervenant VARCHAR(255) NOT NULL, typeintervention_id INT NOT NULL, typepanne_id INT NOT NULL, dureeintervention TIME NOT NULL, travaux LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE panne');
    }
}
