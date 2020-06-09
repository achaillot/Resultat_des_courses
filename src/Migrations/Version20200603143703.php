<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200603143703 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(100) NOT NULL, INDEX IDX_3BAE0AA7C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, user_id INT NOT NULL, name VARCHAR(100) NOT NULL, date DATE NOT NULL, total_distance DOUBLE PRECISION DEFAULT NULL, swim_distance DOUBLE PRECISION DEFAULT NULL, bike_distance DOUBLE PRECISION DEFAULT NULL, run_distance DOUBLE PRECISION DEFAULT NULL, total_time TIME DEFAULT NULL, swim_time TIME DEFAULT NULL, bike_time TIME DEFAULT NULL, run_time TIME DEFAULT NULL, vertical_gain INT DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, total_finisher INT DEFAULT NULL, ranking INT DEFAULT NULL, percent_finisher DOUBLE PRECISION DEFAULT NULL, comment LONGTEXT DEFAULT NULL, INDEX IDX_DA6FBBAF71F7E88B (event_id), INDEX IDX_DA6FBBAFA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAF71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAF71F7E88B');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7C54C8C93');
        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAFA76ED395');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE race');
    }
}
