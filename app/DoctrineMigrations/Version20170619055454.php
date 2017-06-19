<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170619055454 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chamados DROP FOREIGN KEY FK_C638B1C4C4A81A1D');
        $this->addSql('DROP INDEX IDX_C638B1C4C4A81A1D ON chamados');
        $this->addSql('ALTER TABLE chamados DROP meus_chamados_id');
        $this->addSql('ALTER TABLE chamados_concluidos ADD meus_chamados_id INT NOT NULL');
        $this->addSql('ALTER TABLE chamados_concluidos ADD CONSTRAINT FK_730D3273C4A81A1D FOREIGN KEY (meus_chamados_id) REFERENCES meus_chamados (id)');
        $this->addSql('CREATE INDEX IDX_730D3273C4A81A1D ON chamados_concluidos (meus_chamados_id)');
        $this->addSql('ALTER TABLE meus_chamados DROP FOREIGN KEY FK_6AA0C79AA3373B86');
        $this->addSql('DROP INDEX IDX_6AA0C79AA3373B86 ON meus_chamados');
        $this->addSql('ALTER TABLE meus_chamados CHANGE chamados_concluidos_id chamados_id INT NOT NULL');
        $this->addSql('ALTER TABLE meus_chamados ADD CONSTRAINT FK_6AA0C79A253BDC0D FOREIGN KEY (chamados_id) REFERENCES chamados (id)');
        $this->addSql('CREATE INDEX IDX_6AA0C79A253BDC0D ON meus_chamados (chamados_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chamados ADD meus_chamados_id INT NOT NULL');
        $this->addSql('ALTER TABLE chamados ADD CONSTRAINT FK_C638B1C4C4A81A1D FOREIGN KEY (meus_chamados_id) REFERENCES meus_chamados (id)');
        $this->addSql('CREATE INDEX IDX_C638B1C4C4A81A1D ON chamados (meus_chamados_id)');
        $this->addSql('ALTER TABLE chamados_concluidos DROP FOREIGN KEY FK_730D3273C4A81A1D');
        $this->addSql('DROP INDEX IDX_730D3273C4A81A1D ON chamados_concluidos');
        $this->addSql('ALTER TABLE chamados_concluidos DROP meus_chamados_id');
        $this->addSql('ALTER TABLE meus_chamados DROP FOREIGN KEY FK_6AA0C79A253BDC0D');
        $this->addSql('DROP INDEX IDX_6AA0C79A253BDC0D ON meus_chamados');
        $this->addSql('ALTER TABLE meus_chamados CHANGE chamados_id chamados_concluidos_id INT NOT NULL');
        $this->addSql('ALTER TABLE meus_chamados ADD CONSTRAINT FK_6AA0C79AA3373B86 FOREIGN KEY (chamados_concluidos_id) REFERENCES chamados_concluidos (id)');
        $this->addSql('CREATE INDEX IDX_6AA0C79AA3373B86 ON meus_chamados (chamados_concluidos_id)');
    }
}
