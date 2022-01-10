<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211221180045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE struggle (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) NOT NULL, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE struggle_type (struggle_id INT NOT NULL, type_id INT NOT NULL, INDEX IDX_78F264355BDA188D (struggle_id), INDEX IDX_78F26435C54C8C93 (type_id), PRIMARY KEY(struggle_id, type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE struggle_type ADD CONSTRAINT FK_78F264355BDA188D FOREIGN KEY (struggle_id) REFERENCES struggle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE struggle_type ADD CONSTRAINT FK_78F26435C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE struggle_type DROP FOREIGN KEY FK_78F264355BDA188D');
        $this->addSql('ALTER TABLE struggle_type DROP FOREIGN KEY FK_78F26435C54C8C93');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE struggle');
        $this->addSql('DROP TABLE struggle_type');
        $this->addSql('DROP TABLE tags');
        $this->addSql('DROP TABLE type');
    }
}
