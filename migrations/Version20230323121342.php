<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230323121342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP matfis, DROP nom, DROP nbsalle, DROP ville, DROP adresse, DROP numtel');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD matfis INT NOT NULL, ADD nom VARCHAR(50) NOT NULL, ADD nbsalle INT NOT NULL, ADD ville VARCHAR(50) NOT NULL, ADD adresse VARCHAR(50) NOT NULL, ADD numtel INT NOT NULL');
    }
}
