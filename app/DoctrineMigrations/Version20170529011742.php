<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170529011742 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chamados ADD nome VARCHAR(255) NOT NULL, ADD data_criacao VARCHAR(255) NOT NULL, ADD emissor VARCHAR(255) NOT NULL, ADD numero VARCHAR(255) NOT NULL, ADD descricao VARCHAR(255) NOT NULL, ADD data_limite VARCHAR(255) NOT NULL, DROP name, DROP creation_date, DROP emitter, DROP number, DROP description, DROP deadline');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chamados ADD name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD creation_date VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD emitter VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD number VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD description VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD deadline VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP nome, DROP data_criacao, DROP emissor, DROP numero, DROP descricao, DROP data_limite');
    }
}
