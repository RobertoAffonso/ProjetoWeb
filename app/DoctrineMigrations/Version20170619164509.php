<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170619164509 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chamados_concluidos DROP FOREIGN KEY FK_730D3273C4A81A1D');
        $this->addSql('DROP INDEX IDX_730D3273C4A81A1D ON chamados_concluidos');
        $this->addSql('ALTER TABLE chamados_concluidos DROP meus_chamados_id');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chamados_concluidos ADD meus_chamados_id INT NOT NULL');
        $this->addSql('ALTER TABLE chamados_concluidos ADD CONSTRAINT FK_730D3273C4A81A1D FOREIGN KEY (meus_chamados_id) REFERENCES meus_chamados (id)');
        $this->addSql('CREATE INDEX IDX_730D3273C4A81A1D ON chamados_concluidos (meus_chamados_id)');
    }
}
