<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230321140751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etudiant_formation (etudiant_id INT NOT NULL, formation_id INT NOT NULL, INDEX IDX_8ECBC4C8DDEAB1A3 (etudiant_id), INDEX IDX_8ECBC4C85200282E (formation_id), PRIMARY KEY(etudiant_id, formation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etudiant_formation ADD CONSTRAINT FK_8ECBC4C8DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudiant_formation ADD CONSTRAINT FK_8ECBC4C85200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant_formation DROP FOREIGN KEY FK_8ECBC4C8DDEAB1A3');
        $this->addSql('ALTER TABLE etudiant_formation DROP FOREIGN KEY FK_8ECBC4C85200282E');
        $this->addSql('DROP TABLE etudiant_formation');
    }
}
