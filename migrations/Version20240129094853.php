<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240129094853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, field1 VARCHAR(255) NOT NULL, field2 LONGTEXT DEFAULT NULL, field3 TINYINT(1) NOT NULL, field4 INT NOT NULL, field5 SMALLINT DEFAULT NULL, field6 BIGINT DEFAULT NULL, field7 DOUBLE PRECISION DEFAULT NULL, field8 JSON NOT NULL, field9 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', field10 NUMERIC(5, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test2 (id INT AUTO_INCREMENT NOT NULL, field8_id INT DEFAULT NULL, field1 VARCHAR(255) NOT NULL, field2 LONGTEXT NOT NULL, field3 TINYINT(1) NOT NULL, field4 INT NOT NULL, field5 SMALLINT NOT NULL, field6 BIGINT NOT NULL, field7 DOUBLE PRECISION NOT NULL, field9 JSON NOT NULL, INDEX IDX_13BB8D586041E692 (field8_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE test2 ADD CONSTRAINT FK_13BB8D586041E692 FOREIGN KEY (field8_id) REFERENCES test (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test2 DROP FOREIGN KEY FK_13BB8D586041E692');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE test2');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
