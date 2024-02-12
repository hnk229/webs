<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212014131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_evenements (user_id INT NOT NULL, evenements_id INT NOT NULL, INDEX IDX_466D12ECA76ED395 (user_id), INDEX IDX_466D12EC63C02CD4 (evenements_id), PRIMARY KEY(user_id, evenements_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_evenements ADD CONSTRAINT FK_466D12ECA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_evenements ADD CONSTRAINT FK_466D12EC63C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_evenements DROP FOREIGN KEY FK_466D12ECA76ED395');
        $this->addSql('ALTER TABLE user_evenements DROP FOREIGN KEY FK_466D12EC63C02CD4');
        $this->addSql('DROP TABLE user_evenements');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom');
    }
}
