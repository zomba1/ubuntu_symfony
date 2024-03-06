<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306112533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql( "INSERT info (title, content) VALUES ('Title 1', 'Content 1')");
        $this->addSql( "INSERT info (title, content) VALUES ('Title 2', 'Content 2')");
        $this->addSql( "INSERT info (title, content) VALUES ('Title 3', 'Content 3')");
        $this->addSql( "INSERT info (title, content) VALUES ('Title 4', 'Content 4')");
        $this->addSql( "INSERT info (title, content) VALUES ('Title 5', 'Content 5')");
    }

    public function down(Schema $schema): void
    {
        $this->addSql( 'DELETE FROM info');
    }
}
