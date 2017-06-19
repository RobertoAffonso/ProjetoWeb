<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170619063556 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE meus_chamados DROP FOREIGN KEY FK_6AA0C79A1CA9EE3B');
        $this->addSql('ALTER TABLE meus_chamados DROP FOREIGN KEY FK_6AA0C79A4D94F126');
        $this->addSql('DROP INDEX IDX_6AA0C79A4D94F126 ON meus_chamados');
        $this->addSql('DROP INDEX IDX_6AA0C79A1CA9EE3B ON meus_chamados');
        $this->addSql('ALTER TABLE meus_chamados DROP fila_id, DROP setor_id, DROP nome, DROP prioridade, DROP descricao, DROP data_limite');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE meus_chamados ADD fila_id INT NOT NULL, ADD setor_id INT NOT NULL, ADD nome VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD prioridade VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD descricao LONGTEXT NOT NULL COLLATE utf8_unicode_ci, ADD data_limite DATETIME NOT NULL');
        $this->addSql('ALTER TABLE meus_chamados ADD CONSTRAINT FK_6AA0C79A1CA9EE3B FOREIGN KEY (fila_id) REFERENCES fila (id)');
        $this->addSql('ALTER TABLE meus_chamados ADD CONSTRAINT FK_6AA0C79A4D94F126 FOREIGN KEY (setor_id) REFERENCES setores (id)');
        $this->addSql('CREATE INDEX IDX_6AA0C79A4D94F126 ON meus_chamados (setor_id)');
        $this->addSql('CREATE INDEX IDX_6AA0C79A1CA9EE3B ON meus_chamados (fila_id)');
    }
}
