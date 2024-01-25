<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125130203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test2 (id INT AUTO_INCREMENT NOT NULL, field8_id INT DEFAULT NULL, field1 VARCHAR(255) NOT NULL, field2 LONGTEXT NOT NULL, field3 TINYINT(1) NOT NULL, field4 INT NOT NULL, field5 SMALLINT NOT NULL, field6 BIGINT NOT NULL, field7 DOUBLE PRECISION NOT NULL, field9 JSON NOT NULL, INDEX IDX_13BB8D586041E692 (field8_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE test2 ADD CONSTRAINT FK_13BB8D586041E692 FOREIGN KEY (field8_id) REFERENCES test (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test2 DROP FOREIGN KEY FK_13BB8D586041E692');
        $this->addSql('DROP TABLE test2');
    }
}
