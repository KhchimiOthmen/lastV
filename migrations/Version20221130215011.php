<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221130215011 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE enseignant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, grade VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formation ADD enseignant_id INT NOT NULL, CHANGE detail detail VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_404021BFE455FCC0 ON formation (enseignant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE455FCC0');
        $this->addSql('DROP TABLE enseignant');
        $this->addSql('DROP INDEX IDX_404021BFE455FCC0 ON formation');
        $this->addSql('ALTER TABLE formation DROP enseignant_id, CHANGE detail detail VARCHAR(255) DEFAULT NULL');
    }
}
