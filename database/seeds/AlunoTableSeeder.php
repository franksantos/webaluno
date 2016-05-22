<?php

/**
 * Created by PhpStorm.
 * User: frank
 * Date: 17/05/2016
 * Time: 12:06
 */
use Illuminate\Database\Seeder;
use App\Aluno;
class AlunoTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.
        //limpa a tabela
        Aluno::truncate();
        /** Alunos de ADMINISTRAÇÃO LAJEADO*/
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'RAWLLISON COSTA PINHEIRO','alu_cpf'   =>'05690602302','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'TACIZIO BANDEIRA MARTINS','alu_cpf'   =>'05521515305','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'EVA KAROLLYNNE COUTINHO BANDEIRA','alu_cpf'   =>'05691551345','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'MARIA SILEIA FERRERA DA SILVA MOTA','alu_cpf'   =>'15804483825','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'DANIEL MARTINS SOUSA','alu_cpf'   =>'60704418347','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'LUCIANA BANDEIRA GOMES','alu_cpf'   =>'01174612371','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'ANA LUCIA ABREU ARAUJO','alu_cpf'   =>'01159424322','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'RITA DE CASSIA DINIZ DA COSTA','alu_cpf'   =>'04620966371','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'GEOVA DA SILVA SANTOS','alu_cpf'   =>'04849320392','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'ELAINE SANTANA DA SILVA','alu_cpf'   =>'04247262386','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'KAMILA  ALVES RUAS','alu_cpf'   =>'05195737304','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'DALILA SANTOS PINHEIRO','alu_cpf'   =>'05185671335','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'CLESIO BRITO FRANCO','alu_cpf'   =>'05180176301','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'ANA CLAUDIA BARROS DA SILVA ','alu_cpf'   =>'03163815359','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'FABIANA CARVALHO DE SOUSA','alu_cpf'   =>'02983128326','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'CARLOS JOSE LIMA DE ARAUJO','alu_cpf'   =>'04035788333','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'JULIANA BORGES PIRES DINIZ','alu_cpf'   =>'04319867386','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'PATRICIA SILVA','alu_cpf'   =>'01876326344','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'RITA DE CASIA DA SILVA','alu_cpf'   =>'00048646385','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'NATAL DE JESUS MOTA PINHEIRO','alu_cpf'   =>'94697671368','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'GLAUCIA CIRQUEIRA FARIAS','alu_cpf'   =>'96157887320','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'ROSALIA DE OLIVEIRA CIRQUEIRA SANTOS','alu_cpf'   =>'96511354334','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'RAIMUNDO MARTINS ARAUJO','alu_cpf'   =>'84407417315','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'ROSAGELA MARIA DA COSTA DIAS','alu_cpf'   =>'90008844734','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'TELMARLEI LIMA SANTOS','alu_cpf'   =>'73902845287','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'IRES PEREIRA CARVALHO','alu_cpf'   =>'00229702317','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>1,'alu_nome'  =>'EDVANIA MARIA ALVES LIMA','alu_cpf'   =>'83038965200','alu_tel'   =>'']);

        /** Alunos Complementação E */
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'CECILIA MARIA SILVA CARVALHO','alu_cpf'=>'34526080349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'ROZINETE MORAIS DE CARVALHO','alu_cpf'=>'34333002320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'ROSILENE PEREIRA DO NASCIMENTO','alu_cpf'=>'28849205368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARIA APARECIDA N OLIVEIRA','alu_cpf'=>'40212513320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'GERONICE GONCALVES DIAS SILVA ','alu_cpf'=>'66907560259','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARGILA PEREIRA CAVALCANTE','alu_cpf'=>'64675696368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'ELANA REIS FERREIRA','alu_cpf'=>'64385809372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'ROMENHA AMBROSIO DA SILVA','alu_cpf'=>'64327000353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'DEUVANICE MARIA  AMARAL','alu_cpf'=>'75725606368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'LUIZA MARQUES LOPES','alu_cpf'=>'01667961314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARCIA  ARIANA BENEVIDES ALVES','alu_cpf'=>'01919918302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'BETANIA BRITO FERNANDES','alu_cpf'=>'01163603309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'NURYA MARIA OLIVEIRA FONSECA','alu_cpf'=>'03708161378','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'REJANE LOPES SANTANA','alu_cpf'=>'33331804304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'SILVANIA LIMA CARVALHO','alu_cpf'=>'61972746391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARILENE SOUSA FERREIRA','alu_cpf'=>'48741795334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'EDILANE PEREIRA ROCHA SANTOS','alu_cpf'=>'85467146300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'JULIANA GUIMARAES DIAS','alu_cpf'=>'02272693300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'LUZIA GUIMARAES NEVES','alu_cpf'=>'21221952234','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'ANTONIA WDAIRA GONCALVES FERREIRA SILVA','alu_cpf'   =>'96864370372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'FRANCISCA CELIA GOMES DA SILVA','alu_cpf'   =>'38199696249','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'PAULA GOMES DA SILVA LIMA','alu_cpf'   =>'01736258354','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'NATALIA DA SILVA','alu_cpf'   =>'04692517352','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'AUREATRIZ GOMES GUEDES','alu_cpf'   =>'65545788387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'FRANCISCA VIEIRA DE MELO ','alu_cpf'   =>'36359360306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'BRENDA MARIA PAIXAO','alu_cpf'   =>'04651231128','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARIA AMELIA R LIMA SILVA','alu_cpf'=>'65698892334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARIA DAS NEVES GOMES DA SILVA','alu_cpf'=>'92752020104','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARIA IRAANEIDE RIDRIGUES LIRA','alu_cpf'=>'89711513315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'MARCIA  ANDREIA ALVES','alu_cpf'=>'83433678391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>2,'alu_nome'=>'IRENALDO SILVA SAMPAIO','alu_cpf'=>'80482503300','alu_tel'=>'']);

        /** Alunos de Complementação F */
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'VALDENIA DE MATOS ALENCAR','alu_cpf'   =>'36348066304','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'JANDIRA LIRA SILVA','alu_cpf'   =>'34369252334','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA DO SOCORRO TEXEIRA DE OLIVEIRA','alu_cpf'   =>'32955987387','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ARAO LOPES COSTA','alu_cpf'   =>'28250818334','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'VANUSAMARIA DE SOUSA','alu_cpf'   =>'48765783387','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'VANETE MARIA DE SOUSA','alu_cpf'   =>'48752614387','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ROSAGELA CARMARGO LIMA','alu_cpf'   =>'48290734387','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'DALILA R MENDONCA DE ANDRADE  ','alu_cpf'   =>'46691707320','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ARTELE LIMA BARBAOSA','alu_cpf'   =>'39460843115','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'SILVIA MARIA PEREIRA SILVA','alu_cpf'   =>'17971586353','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA EULANA SA  ARAUJO','alu_cpf'   =>'52323161334','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ROSIMEIRE DASILVA BRITO','alu_cpf'   =>'65255550353','alu_tel'   =>'']);
        //Obs essa aluno aparece em duas turmas diferentes
        //Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'VILENE MARIA FERREIRA DE PAULA','alu_cpf'   =>'75427044353','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA SANDRA CARDOSO DE ARAUJO','alu_cpf'   =>'77010485372','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA CLEITA SILVA SOARES','alu_cpf'   =>'93892896372','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'RAYMARA SILVA SOUSA','alu_cpf'   =>'60314617302','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'LUZIANE DE SOUSA SANTOS','alu_cpf'   =>'65215788391','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'NEIDE RODRIGUES SANTANA','alu_cpf'   =>'27827321372','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'CLEONICE CRUZ SALES','alu_cpf'   =>'00390085332','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ROSA MARIA ALVES AZEVEDO ','alu_cpf'   =>'34328700359','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ARLETE ARAUJO DA SILVA MARINHO','alu_cpf'   =>'83314270330','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'OINEY KATTY SILVA DO VALE ','alu_cpf'   =>'84132191320','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'PEDRO DA C SILVA','alu_cpf'   =>'83912010315','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'RAIMUNDA NONATA LOPESSILVA','alu_cpf'   =>'95548670344','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'NALDA MARIA COSTA OLIVEIRA','alu_cpf'   =>'63804980368','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA DA GUIA FERREIRA DA SILV','alu_cpf'   =>'29377234387','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'NOEL FERREIRA VIEIRA FILHO','alu_cpf'   =>'04379704181','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'RAIMUNDO NONATO BARROS JUNIOR','alu_cpf'   =>'04021032380','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ROZANA DE MORAIS SILVA','alu_cpf'   =>'02894367376','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ILDENE CARNEIRO BRITO','alu_cpf'   =>'03331781304','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'NATALIA COSTA  ALVES','alu_cpf'   =>'03334175340','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA GABRIELLA PEREIRA MENEZE','alu_cpf'   =>'05441347376','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ELIANE FERREIRA CARVALHO','alu_cpf'   =>'00817609300','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'JOSENIR SOUSA  LEITE','alu_cpf'   =>'01023072378','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'ELINES DIAS DE BARROS','alu_cpf'   =>'01239514379','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARILIA PIRANGI LIMA','alu_cpf'   =>'02240928395','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'SARAH REGINA SILVA VIEIRA','alu_cpf'   =>'01239515340','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'CLAUDIA HELENA MDA SILVA','alu_cpf'   =>'57203695387','alu_tel'   =>'']);
        Aluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARILENE LOPES SILVA','alu_cpf'   =>'70391190300','alu_tel'   =>'']);
        //duplicadoAluno::create(['alu_tur_id'=>3,'alu_nome'  =>'MARIA SANDRA CARDOSO DE ARAUJO','alu_cpf'   =>'77010485372','alu_tel'   =>'']);


        /** Alunos Pós-Graduação H */
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'KATIA CILENE VIEIRA PONTES','alu_cpf'=>'34448757391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROSA MARIA MATIAS BARBOSA','alu_cpf'=>'34391517353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARINA DE NAZARE OLIVEIRA CANTANHEDE','alu_cpf'=>'34202447204','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROSILENE MORAIS DE OLIVEIRA MARINHO','alu_cpf'=>'29124409391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'EVANEIDE RIBEIRO ARAUJO','alu_cpf'=>'29114640368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROSILDA DOS SANTOS ALMEIDA','alu_cpf'=>'29237629320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'JANISCLEI CHAVES DA COSTA','alu_cpf'=>'52318559368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'GISELLE SILVA MATOS ','alu_cpf'=>'48780340334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'SILVIA CRISTINA SILVA MATOS','alu_cpf'=>'48735779349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'CLAUDETE SOUSA SILVA','alu_cpf'=>'46715177368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'PATRICIA VALERIA DE CARVALHO MARREIROS  ','alu_cpf'=>'46708553368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'JANE DA SILVA FROTA AMORIM','alu_cpf'=>'43628192315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'LAURINETE PINHEIRO DA SILVA','alu_cpf'=>'43559778387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA DA PAZ DA SILVA E SILVA','alu_cpf'=>'42919487354','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ANTONIA FERREIRA DA SILVA','alu_cpf'=>'41298942349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'JULIA MARIA SILVA RODRIGUES','alu_cpf'=>'45036209320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA TELMA DE SOUSA ROCHA SILVA','alu_cpf'=>'20763999334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARILENE PEREIRA MARINHO','alu_cpf'=>'25726749391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA BRASILINA DE BRITO SOUSA  ','alu_cpf'=>'25535005304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'FRANCISCA COSTA OLIVEIRA','alu_cpf'=>'25534173300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA  ANTONIA RODRIGUES DE OLIVEIRA    ','alu_cpf'=>'25531581300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'CLAUDINEIA  VIEIRA ALVES','alu_cpf'=>'20872944304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'BERLIETE MENDES MOURA','alu_cpf'=>'13729411349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA DO ROSARIO CESAR MELO','alu_cpf'=>'27836193349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'GEUSANE SILVA MATOS','alu_cpf'=>'70339180382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'LEILA ALVES DOS SANTOS','alu_cpf'=>'69362734320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'FRANCINEUMA DA  SILVA NASCIMENTO','alu_cpf'=>'66976600310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROSIRENE SANTOS DE OLIVEIRA','alu_cpf'=>'64174662304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ELIETE ROSA DE SOUSA SANTOS','alu_cpf'=>'64005801315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA DO SOCORRO SOUSA E SILVA','alu_cpf'=>'65673484372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'DALIENE RAQUEL CASTRO SOUSA','alu_cpf'=>'80527280372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'KATIA DE MOURA NASCIENTO PESSOA','alu_cpf'=>'79254292320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MIRACELIA  LOPES CARVALHO','alu_cpf'=>'76941558334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'CLEUDIMAR DE SOUSA E SOUSA','alu_cpf'=>'76159809334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARISETE MENDES DOS SANTOS','alu_cpf'=>'63423065320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROZENILDA BERERRA DE SOUSA','alu_cpf'=>'74300547300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'IRANILDE FARIAS FIGUEREDO','alu_cpf'=>'73675547353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARILENE DE ARAUJO','alu_cpf'=>'71127801368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'JOSELIA ALVES ARAUJO','alu_cpf'=>'70939420325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'NAYARA TAYANE SILVA MATOS','alu_cpf'=>'60275741354','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROSY ALDA DEQUEIXES REIS','alu_cpf'=>'57668485368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ALBETIZAGOMES DA SILVA','alu_cpf'=>'55142559304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROSILENE VIEIRA DE SA','alu_cpf'=>'62559427320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MARIA DOS SANTOS ANDRADE MILITAO','alu_cpf'=>'62432567315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'SILVANIA DA SILVA OLIVEIRA','alu_cpf'=>'62314882334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'FERNANDA BARBOSA DOS SANTOS CHAVES','alu_cpf'=>'01837786348','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'LUANA OLIVEIRA LIMA','alu_cpf'=>'01752150309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'SUZANA SOUZA DA SILVA','alu_cpf'=>'01406706370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ROMENIA DASILVA MENESES','alu_cpf'=>'01320492363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'VALDINA BATISTA MOURA','alu_cpf'=>'02193262314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'GILBERTO PIRES MACHADO','alu_cpf'=>'02041147725','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'VANI CLEIA  ALMEIDA SANTOS BANDEIRA','alu_cpf'=>'00630975329','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ANA NUBIA DECARVALHO SOUZA ','alu_cpf'=>'00399432329','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'DULCIA CONCEICAO NASCIMENTO','alu_cpf'=>'00273273370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'FERNANDA TAVARES DA SILVA FERREIRA','alu_cpf'=>'00165398345','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ANTONIA MARIA DEMORAIS','alu_cpf'=>'00709800800','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'POLLYANE DE SOUSA SANTOS MENDOCA','alu_cpf'=>'04804797394','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'MIRELLY FERREIRA ALVES','alu_cpf'=>'04971497374','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'ELIZANIA ARAUJO RIBEIRO','alu_cpf'=>'03364310319','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'SANDRA COSTA DE OLIVEIRA','alu_cpf'=>'81208375172','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'NAGILA SARITA DE O SILVA MENDES M CARVAL','alu_cpf'=>'03622273143','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'RUBERVAL FERREIRA BARBOSA','alu_cpf'=>'96226897368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'CRISTIANE RODRIGUES FERREIRA','alu_cpf'=>'95055029315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'PATRICIA GUIMARES SOARES','alu_cpf'=>'99138638304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'JAEL LIMA DA SILVA','alu_cpf'=>'97399710325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'FRANCISCA JACILENE SILVA CONCEICAO','alu_cpf'=>'84378840391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'REGINALDO GOMES CARVALHO','alu_cpf'=>'82527857353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'SUELI CARDOSO DA SILVA ROCHA','alu_cpf'=>'92161979353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'RUTE ROLINS DA SILVA','alu_cpf'=>'90027655334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>4,'alu_nome'  =>'LUCIANA JASEN DA SILVA','alu_cpf'=>'97227064387','alu_tel'=>'']);

        /** Alunos de Pedagogia Cocos */
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'GILDENE RIBEIRO DA SILVA           ','alu_cpf'=>'37574616817','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'RITA MOREIRA DA CONCEICAO          ','alu_cpf'=>'06605596331','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JAILANE FERNANDES DE OLIVEIRA      ','alu_cpf'=>'06103783330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'ANGELICA DE SA OLIVEIRA            ','alu_cpf'=>'60560457308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'LEONARDA SILVA ROSA                ','alu_cpf'=>'60399668314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'FRANCISCO HELIO LOPES DA CRUZ      ','alu_cpf'=>'60215189345','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'KARINA SA OLIVEIRA                 ','alu_cpf'=>'61043960384','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JAILENE ALVES DA SILVA             ','alu_cpf'=>'61022633325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'VANIELCA FERNANDES DE MELO         ','alu_cpf'=>'61013235363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JANAINA THAYANNE PEREIRA NASCIMENTO','alu_cpf'=>'02066042382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'BETANIA PEREIRA DE CARVALHO        ','alu_cpf'=>'00804782393','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'POLYANA FERREIRA DE SA             ','alu_cpf'=>'00783505302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'KEILIANE SILVA SA PEREIRA          ','alu_cpf'=>'00775612367','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JOSE CLERISON SA E SILVA           ','alu_cpf'=>'00773884378','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JOSEMARIA SOUSA VITORINO           ','alu_cpf'=>'00771683308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JOANA BARBOSA CORREIA              ','alu_cpf'=>'00686139380','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'RITA LAIANE DE SA                  ','alu_cpf'=>'04388558338','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'RAFAELSOARES RIBEIRO               ','alu_cpf'=>'05115104385','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'MARCELA SILVA GOVEIA               ','alu_cpf'=>'04171272351','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'LUIZANGELA FERNANDES DE SA         ','alu_cpf'=>'04898014399','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'MARIA NILVA DE SA MOTA             ','alu_cpf'=>'03312609305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'RITA MARIA DE SA SOUZA             ','alu_cpf'=>'02839626314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'DAIANE FERNANDES DE MELO           ','alu_cpf'=>'03800758300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'KATIANA PEREIRA DAS NEVES          ','alu_cpf'=>'03754698346','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'DENIDES VIANA DOS SANTOS           ','alu_cpf'=>'94534764391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'JOELZA SOUSA VITORINO BARROSO      ','alu_cpf'=>'94159769349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'TEREZINHA DE JESUS LIMA COSTA      ','alu_cpf'=>'92764096372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'REJAME VIANA COSTA FERNANDES       ','alu_cpf'=>'85714976304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'FRANCILEIA LUIZA FERREIRA DE SA    ','alu_cpf'=>'92665659387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>5,'alu_nome'=>'SONIA MARIA DE JESUS FERREIRA      ','alu_cpf'=>'93237170100','alu_tel'=>'']);

        /** Alunos do curso de Serviço Social B */
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'FERNANDO ALENCAR MORAES','alu_cpf'=>'52359786334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'SANDRA MARIA BATISTA MOURA SODRE','alu_cpf'=>'34328904353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'LAURICE DE ALMEIDA CRUZ','alu_cpf'=>'32903529353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'HELENI FRANCISCA DOS SANTOS SILVA','alu_cpf'=>'25443550349','alu_tel'=>'']);
        //OBS Aluno com cpf duplicado
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'JAIRA DA SILVA MENDES MELO','alu_cpf'=>'78025931315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'IRESLOURANIA SILVA PASSOS','alu_cpf'=>'60751822337','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'PATRICIA  ARAUJO DOAS SANTOS','alu_cpf'=>'60008745374','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MARINALVA FRANCO LIMA','alu_cpf'=>'53074777320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MIZIA RIBEIRO VIANA','alu_cpf'=>'62286480397','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'HANNAH MARIA M RODRIGUES DE CARVALHO','alu_cpf'=>'60615500307','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'SORAYA PIRES NASCIMENTO','alu_cpf'=>'62215779349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'EANES MORAIS LIMA','alu_cpf'=>'01300235314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'SANDRA MARA OLIVEIRA ALVES','alu_cpf'=>'00104521333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'ANTONIA REGINA REIS TEIXEIRA SILVA','alu_cpf'=>'01042287333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MAURA NETO DA SILVA','alu_cpf'=>'00782563309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'DANIELLA  DOS SANTOS LEITE','alu_cpf'=>'04249185362','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'LEONARDO LEAL ARAUJO','alu_cpf'=>'03385220343','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'JAYANE DA SILVA OLIVEIRA','alu_cpf'=>'02780684305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'JAQUELINE ALVES DOS REIS','alu_cpf'=>'02654265374','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MARICELY GUIMARAES DE FARIAS','alu_cpf'=>'03201476307','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'JOCIVANIA PEREIRA DA SILVA','alu_cpf'=>'04154882147','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'ALVORO DIAS FERREIRA','alu_cpf'=>'03859233335','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'FABIOLA SILVA','alu_cpf'=>'03468421311','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'GONCALA CARVALHO DE SOUSA NETA','alu_cpf'=>'02525572394','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MARCIA DE SOUSA ROCHA TEIXEIRA','alu_cpf'=>'93068280397','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'LUIZANGELA IDALGO MIRANDA','alu_cpf'=>'92863442104','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'BRUNA DOS SANTOS ARAUJO','alu_cpf'=>'99858924372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'GISELLY ALMEIDA DASILVA','alu_cpf'=>'99375508315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MARLENE RODRIGUES DA S FERREIRA','alu_cpf'=>'82991480300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'MIRIAN ALVES FEITOSA','alu_cpf'=>'82241368334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'WEKSILENE DESOUSA DUARTE','alu_cpf'=>'90462092372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'PATRICIA SOUSA SILVA','alu_cpf'=>'91505470382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'DAIANA SILVA CAMPOS','alu_cpf'=>'90734971168','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'NUBIA  ALVES SILVA CARVALHO','alu_cpf'=>'00728980380','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>6,'alu_nome'=>'VIVIANE SILVA SANTOS','alu_cpf'=>'03326281323','alu_tel'=>'']);

        /** Alunos de Serviço Social A */
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA DE FATIMA  PEREIRA BARBOSA','alu_cpf'=>'33417695368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'ROSEMARY NASCIMENTO PEREIRA','alu_cpf'=>'32830076320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARINALVA ARAUJO ALMEIDA','alu_cpf'=>'48947610330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'ASTROJANE MARIA SANTOS SOUSA','alu_cpf'=>'42527554334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'RAQUEL DE ANDRADE NASCIMENTO','alu_cpf'=>'41306511372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA DO ROSARIO AQUINO RAPOSO','alu_cpf'=>'06449190353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'RAIMUNDA LIMA  RIBEIRO','alu_cpf'=>'25537172372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'ELIECE LIBERALIVA DA COSTA','alu_cpf'=>'25364030334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'TEREZA DE CARVALHO SANTIAGO','alu_cpf'=>'10116486368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'OZIAS SOUSA LIMA','alu_cpf'=>'25271059391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'LEONILDES GREGORIO DE ABREL','alu_cpf'=>'79863078115','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'REJANE DOS SANTOS NASCIMENTO LUZ ','alu_cpf'=>'74322869300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'OZANIA MEDEIROS DE SOUZA ','alu_cpf'=>'52849660310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA VANEIDE LIMA ','alu_cpf'=>'61400173353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'RAYANE NASCIMENTO BARROSO','alu_cpf'=>'62549502353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'GILVAN DOS SANTOS NUNES','alu_cpf'=>'00228483395','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'WENA ALVES DE AQUINO','alu_cpf'=>'00191649392','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MAYANNA CARVALHO VIEIRA','alu_cpf'=>'02638251321','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'AURICELIA  ALVES DA SILVA  FERNANDES','alu_cpf'=>'01084120321','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'ELVIA PRICILA  NOGEIRA  COELHO','alu_cpf'=>'00932067395','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'VALDEANE DE SOUSA SILVA','alu_cpf'=>'0434679325 ','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'LARISSA KETLEM OLIVEIRA CARVALHO','alu_cpf'=>'04982119163','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'CLAUDENYCE PEREIRA SILVA','alu_cpf'=>'03167661356','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIANA ALMEIDA SOUSA','alu_cpf'=>'00979933366','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'CARMEM DA CSANTOS ALVES','alu_cpf'=>'96146010359','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MEIRY RIBEIRO SILVA','alu_cpf'=>'95727825334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'GILVANI PEREIRA DA SILVA','alu_cpf'=>'94579407334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'ANTONIA VALDIRENE DA SILVA','alu_cpf'=>'94548234349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA EDILENE NUNES DE SOUSA','alu_cpf'=>'93891393334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MIRIAN DE SOUSA  ALMEIDA','alu_cpf'=>'98968530378','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'GILDA DIAS DE SOUSA','alu_cpf'=>'92102557391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'SANDRA MARIA SOUSA PEREIRA','alu_cpf'=>'87858460415','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA EDVANA N MELO','alu_cpf'=>'36395536320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA JOSE SOUSA COSTA SILVA','alu_cpf'=>'00384288308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>7,'alu_nome'=>'MARIA REGINA BOTELHO MARTINS','alu_cpf'=>'80993834191','alu_tel'=>'']);

            /** aLUNOS Pedagogia de Passagem Boa MA */
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MARIAFRANCILENE GOMES DE GOUVEIA','alu_cpf'=>'40145298353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'ANTONIA DO ESPIRITO SANTO COSTA LIMA','alu_cpf'=>'05538105377','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MARIA IRENE RODRIGUES MANTINS','alu_cpf'=>'81143486315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'ROBERTO PEREIRA BELFORT','alu_cpf'=>'52376621372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MARIA ZELIA CHAVES PEREIRA','alu_cpf'=>'74839373353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'EVA  MARIA DOS SANTOS','alu_cpf'=>'74049356368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'JARDEON RODRIGUES DOS SANTOS ','alu_cpf'=>'60554905361','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'CLAUDIRENE DOS SANTOS APINAGE','alu_cpf'=>'02172480398','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'CEILANJA FERREIRA DA SILVA','alu_cpf'=>'00638262321','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'ELENIRA LIMA DA SILVA','alu_cpf'=>'00460407309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'ELBA LIMA DA SILVA ','alu_cpf'=>'00460391399','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MANOEL MESSIS DE OLIVEIRA CIRQUEIRA ','alu_cpf'=>'01164143328','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'REGINA BARROS PAIXAO','alu_cpf'=>'01007124369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'FERNANDO DINIZ DE SOUSA BEQUIMAN','alu_cpf'=>'05184302352','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'WELITON DE ABREU BARROS ','alu_cpf'=>'05172672338','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'CAMILA BARROS DOS SANTOS','alu_cpf'=>'03456852371','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'GENIVAN RIBEIRO DE BRITO','alu_cpf'=>'04201564371','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MARIA DE SOUSA SANTANA VIANA','alu_cpf'=>'94948992372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'LUCINETE NEVES DA SILVA  ','alu_cpf'=>'96243430391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'SEBASTIANA GOMES DA SILVA','alu_cpf'=>'94600112172','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MARIA DE JESUS AGUIAR DE SOUSA','alu_cpf'=>'99294281353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>8,'alu_nome'=>'MARIA JOSE DE SOUSA PEREIRA','alu_cpf'=>'84770988320','alu_tel'=>'']);

        /** Alunos da Turma de Pedagogia H */
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'DIOMAR SILVA DOS SANTOS','alu_cpf'=>'33625590344','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'JEOVANIA MOREIRA FRANCISCO DE SOUZA','alu_cpf'=>'43619401349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'VIVIAN DOS SANTOS','alu_cpf'=>'29571526819','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARCIA DALENE RBEIRO SILVA','alu_cpf'=>'26989018372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ANTONIA DA SILVA VELOZO','alu_cpf'=>'66681359353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MIRIAN RODRIGUES DA SILVA ','alu_cpf'=>'75802490306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARILDA FERREIRA DA SILVA ','alu_cpf'=>'72487330325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'SUMIKO SATO','alu_cpf'=>'63887312368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARINA ARAUJO DA  SILVA','alu_cpf'=>'62950460372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ELIANE DA SILVA PEREIRA','alu_cpf'=>'62581198320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'DANUBIA OLIVEIRA REIS FEREIRA','alu_cpf'=>'01752070380','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'CARLA DIAS SANTOS','alu_cpf'=>'01705266312','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'CLERISMA MOURA DA SILVA MATOS','alu_cpf'=>'01545722331','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARIA DE JESUS LIMA MALAQUIAS','alu_cpf'=>'01500762318','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'REGIANE ARAUJO SILVA','alu_cpf'=>'01314236300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'AUDILETE BARBOSA PASCOAL','alu_cpf'=>'01303595303','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ADRIANA LOPES CHAVES','alu_cpf'=>'02341995390','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'JOSEANE DA SILVA SANTOS ','alu_cpf'=>'02125634321','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'SILVANETE SOUSA DA SILVA','alu_cpf'=>'00416561306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'GERRY PEREIRA SOUSA','alu_cpf'=>'04860434366','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARIA CRISTIANE DA SILVA COSTA','alu_cpf'=>'34325077391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ISABEL STEFHANY DA CONCEICAO DA  SILVA','alu_cpf'=>'05423670330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ELIELDA HOLANDA DA  SILVA','alu_cpf'=>'20556802349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ARETUZA LOPES DA SILVA','alu_cpf'=>'61864323353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARIA ISLENE DO NASCIMENTO BARBOSA ','alu_cpf'=>'34399747315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARIA SOLIDADE MOURA SILVA CARNEIRO','alu_cpf'=>'96074191387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'ANA CRISTINA DA CONCEICAO SANTOS','alu_cpf'=>'84154527304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'MARCIA ALVES DASILVA','alu_cpf'=>'91738598349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'VERA LUCIA NUNES BARROS','alu_cpf'=>'90562224300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>9,'alu_nome'=>'IZABEL CRISTINA REIS MENDES','alu_cpf'=>'91270170368','alu_tel'=>'']);

        /** Alunos da  PÓS-GRADUAÇÃO I*/
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'MARIA DE JESUS F SILVA ','alu_cpf'=>'33370338300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ANTONIO VALQUINES DE OLIVEIRA BEZERRA','alu_cpf'=>'87948117334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'CASSIA SALES DE SOUSA','alu_cpf'=>'98128353349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'KELEN RAFAELA GRAMA SANTOS','alu_cpf'=>'01879629364','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'JUVENAL GOMES VIANA','alu_cpf'=>'26526190391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'VILCELINO MARINHO VIEIRA','alu_cpf'=>'36518735368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ADELAIDE DAYANNE L SILVA ARAUJO ','alu_cpf'=>'94578257304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'JOICE LENY SOUSA NASCIMENTO','alu_cpf'=>'72667044304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ULDANCY NUNES DE SOUSA','alu_cpf'=>'30465486304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'SUELY MONTEIRO LEAL','alu_cpf'=>'28128672304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'JULIO CESAR FONSECA PINTO','alu_cpf'=>'85814105372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ANDREZA TORRES DE AZEVEDO','alu_cpf'=>'00349599394','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ELAYNE REGINA TORRESAZEVEDO ','alu_cpf'=>'90770811353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ANA LUCIA DO NASCIMENTO BARROS','alu_cpf'=>'00008510350','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'VALDIR MAGALHOES FONTES','alu_cpf'=>'74717723368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'VALDIR DA ROCHA ARAUJO','alu_cpf'=>'40646696300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'MARIA DAS GRACAS FRANCA DE SOUZA','alu_cpf'=>'34376127353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'JOYCE LEAL FACUNDES','alu_cpf'=>'03579978322','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'LUCIANA NASCIMENTO DE MACEDO  ','alu_cpf'=>'01597270300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'ALANA MACEDO SILVA ','alu_cpf'=>'64930661315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'CYNTHIA FREITAS ANTUNES VALLE ','alu_cpf'=>'04486548736','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'FERNANDO SILVA FERNANDES','alu_cpf'=>'02553873344','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>10,'alu_nome'=>'CLAUDIA CRISTINA TDOS SANTOS','alu_cpf'=>'33416451368','alu_tel'=>'']);

        /**
         *
         *  TURMAS DO GRAJÁU
         *
         * */
        //Alunos Educação Grajáu
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'RODRIGO DE SA SILVA','alu_cpf'=>'05481912392','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'BOMFIM ALVES DOS SANTOS SOUSA','alu_cpf'=>'01472794370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'LUCAS SILVA DA CRUZ','alu_cpf'=>'60894744364','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'TAYLANA AGUIAR SANTANA FIGUEIRA','alu_cpf'=>'62787683304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'MAURICIO DE SOUSA SALES','alu_cpf'=>'61186123311','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'DOMINGOS FREITAS MARTINS','alu_cpf'=>'40206157304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JOSE DA SILVA SOUSA FILHO','alu_cpf'=>'06505246320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'PATRICIA MARCIEL DE ALMEIDA','alu_cpf'=>'06294475350','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JULIO CESAR GUAJAJARA DA SILVA','alu_cpf'=>'05883907393','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'DIEGO PEREIRA OLIVEIRA ','alu_cpf'=>'05838026308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'EDMILSON VERAS DA COSTA','alu_cpf'=>'18575358120','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'ROBERTO LEUDE ARAUJO DOS SANTOS','alu_cpf'=>'74223500325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JOSE RAIMUNDO DE CASTRO CALDAS','alu_cpf'=>'64473724387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'RITA VALERIA ASSUNCAO BARBOSSA','alu_cpf'=>'63959895372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'LEOMAR DOS SANTOS JANCE','alu_cpf'=>'02206273390','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'FRANCISCO WERBERTH JONNHS DA S FERNANDES','alu_cpf'=>'02198566303','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'ORLANDO CARVALHO MOURA','alu_cpf'=>'02172200379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JOSE RAIMUNDO SANTOS SILVA','alu_cpf'=>'00489795382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'PEDRO PAULO LIMA FACUNDO','alu_cpf'=>'00370464389','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'GERSON LUIZ MACHADO BARBOSA','alu_cpf'=>'00228284350','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'CRISTINA CORTEZ FIGUEIRA','alu_cpf'=>'00256582394','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'WECSLEY SILVA CHAVES','alu_cpf'=>'00652899358','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'ALESSANDRA CORTEZ SANTOS','alu_cpf'=>'00960958304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'MARYANA MARQUES DA SILVA','alu_cpf'=>'05378782384','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JORGE ADRIANO FERREIRA DA SILVEIRA','alu_cpf'=>'05260020340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'CLEUDIVAN DE SOUSA VASCONCELO','alu_cpf'=>'05232302302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'ENICAZIO GONCALVES COSTA','alu_cpf'=>'05182065302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JOAO BATISTA TEIXEIRA MARTINS','alu_cpf'=>'04897768330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'MIRIANE VIEIRA PORTO','alu_cpf'=>'04054289363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'LISLARIA PEREIRA CHAVES','alu_cpf'=>'03629571344','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'GILSON MACHADO BARBOSA','alu_cpf'=>'84383755372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'PEDRO SERGIO PEREIRA FREITAS ','alu_cpf'=>'83818227349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'JONAS BARROS DA SILVA','alu_cpf'=>'83074260300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'MARIO ANDRETT CAMPOS BATISTA ','alu_cpf'=>'84926635372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'SHEILA BARBOSA SANTANA','alu_cpf'=>'92648860363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'PAULO ROBERTO BEZERRA LIMA','alu_cpf'=>'90332890325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'CARLOS EDUARDO ALENCAR MENDES','alu_cpf'=>'88751902320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'FRANCISCO DE ASSIS S SOUSA','alu_cpf'=>'84308010306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'FRANCILDO DE LIMA DE SOUZA','alu_cpf'=>'95878831368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>11,'alu_nome'=>'UDSON CARVALHO DE SOUSA','alu_cpf'=>'95660283349','alu_tel'=>'']);

        /* Alunos Pedagogia Grajaú Turma A */
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'HERLANDIA MOREIRA LIMA SILVA','alu_cpf'=>'04765247333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'MARIA JOSE DA COSTA FIGUEIREDO','alu_cpf'=>'50485091372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'THAYNARA MARTINS SILVA','alu_cpf'=>'05996614375','alu_tel'=>'']);
        //OBS Alunos diferentes com o mesmo CPF
        //Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'SAMOLARAYANE CONCEICAO SILVA','alu_cpf'=>'71914234200','alu_tel'=>'']);
        //Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'SOLANGE DE SOUZA','alu_cpf'=>'71914234200','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'VILMA BENTO LOPES BONE','alu_cpf'=>'83740643315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'LORIANE DA SILVA LIMA','alu_cpf'=>'60474298310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'FRANCISCA FREIRE DA ROCHA SOUZA','alu_cpf'=>'90428633315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'FLORDELIS CARLOS PEREIRA SANTOS','alu_cpf'=>'80064418391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'MARIA GEANE MOURAO DOS SANTOS','alu_cpf'=>'02190529301','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'DAYSE SANTANA VERAS','alu_cpf'=>'99306700334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'MARIA LETICIA ANDRADE DANTAS SOUSA ','alu_cpf'=>'62774891353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'NARA RAMOS ARAJAU SOUSA','alu_cpf'=>'02753400318','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'SEBASTIANA  APARECIDA REGO PEREIRA  ','alu_cpf'=>'72493461304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'ANTONIO ROSARIO DE ARAUJO','alu_cpf'=>'01422862305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'VICENCIA DE OLIVEIRA ALVES','alu_cpf'=>'01276516320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'CINTIA CRISTINA DE SA','alu_cpf'=>'04535084300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'ANA ALICE DOS SANTOS SILVA','alu_cpf'=>'06472693331','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'ANTONIA LEDA FREIRE DA R RODRIGUES','alu_cpf'=>'48795275304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'IRACEMA CRUZ DA ROCHA','alu_cpf'=>'76469611320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'ANA MARIA DOS SANTOS ','alu_cpf'=>'45172854215','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'JULIANA MARIA DE BARROS PESSOS','alu_cpf'=>'29064457387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'FRANCISCO PATRICIA CRUZ DA SILVA','alu_cpf'=>'02650691301','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'MARIA PEDRINA DOS S J CARVALHO','alu_cpf'=>'34581073391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'JACIARA BATISTA LIMA TORRES','alu_cpf'=>'03474229346','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'LEONARDO RIOS SILVA','alu_cpf'=>'04903782344','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'QUELLY ROSA SANTANA VERAS','alu_cpf'=>'94964440320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'CELIA MARIA RODRIGUES MARQUES ','alu_cpf'=>'81898169349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'ESCIANARIA ALMEIDA LIMA SILVA','alu_cpf'=>'95966340382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'CLEIDE ARRUDA SANTOS','alu_cpf'=>'05159672389','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'CINTIA SOUSA DOS SANTOS','alu_cpf'=>'02915535329','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>12,'alu_nome'=>'GILMARA MACHADO BARBOSA','alu_cpf'=>'01982988380','alu_tel'=>'']);

        /* Alunos Pedagogia Grajaú Turma B */
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ALMIR LIMA NASCIMENTO','alu_cpf'=>'40102866368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'JOANA DA SILVA BATISTA NETA','alu_cpf'=>'40200930320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'POLIANA MENESES','alu_cpf'=>'06442967395','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'IOLANDA PEREIRA DOS SANTOS','alu_cpf'=>'06228323369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'BETINA BENTO RIBEIRO LIMA','alu_cpf'=>'05886162305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'GEORGE RABELO SOUSA','alu_cpf'=>'05681076326','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'CAROLINA BEZERRA GUALBERTO','alu_cpf'=>'06054537300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'MARIA  IVANEIS ALVES DOS SANTOS','alu_cpf'=>'67713505334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'MARCONES DE OLIVEIRA ALMEIDA','alu_cpf'=>'79128009304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ELIZETH RODRIGUES DA SILVA','alu_cpf'=>'76605515315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'SILVANA MIRANDA NASCIMENTO','alu_cpf'=>'60471083348','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'MARIA DE FATIMA PEREIRA NASCIMENTO','alu_cpf'=>'60274694395','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'EDILEIDE LOPES GUAJAJARA','alu_cpf'=>'60273451367','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ELVES SOUSA E SILVA','alu_cpf'=>'56227850306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'EDIVANIA ALVES MACHADO','alu_cpf'=>'60273180312','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ANA CLEIDE DA SILVA SANTOS','alu_cpf'=>'63413906372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ELIENE COSTA SANTOS RABELO','alu_cpf'=>'63193973300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'GLACITANIA SOARES RABELO','alu_cpf'=>'62075594368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'EZEQUIAS SILVA RODRIGUES','alu_cpf'=>'60892699302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'SESUANGELA LOPES GUAJAJARA','alu_cpf'=>'60889278369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'TAINARA SOUZA PEREIRA','alu_cpf'=>'01893426173','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ANA MARTA DE SOUSA','alu_cpf'=>'02417239302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'LUCIANA SANTOS E SILVA','alu_cpf'=>'02333936339','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'VALMIRA ALMEIDA SILVA','alu_cpf'=>'02262641307','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ANA REGIA LIMA DE SOUSA E SILVA','alu_cpf'=>'00288263375','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'CELIA GONCALVES FRAZAO','alu_cpf'=>'00609752375','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'SUELENA FERNANDES LOPES','alu_cpf'=>'00561928355','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'CICERA DOS SANTOS CARDOSO','alu_cpf'=>'00144146355','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'VANUIRES DE SOUSA LIMA','alu_cpf'=>'01015417329','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'YWANNE NAIARA DE SOUSA MORAES','alu_cpf'=>'04745581343','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'SULANE RIBEIRO LOPES GUAJAJARA','alu_cpf'=>'04696998339','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'AMANDA LETICIA FERREIRA DA SILVA','alu_cpf'=>'04463050308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'RAIMUNDA FERNANDES SOUZA ALMEIDA','alu_cpf'=>'04228867340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'RONALDO JUAREZ PEREIRA','alu_cpf'=>'03373255376','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'MANOEL MARIA SOUSA ARAUJO ','alu_cpf'=>'03344524305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'ELAIANE SILVA NOBREGA','alu_cpf'=>'02848639393','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'CIDINEIDE BENTO AMANCIO','alu_cpf'=>'02848638311','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'JOSEANE DE SOUSA OLIVEIRA','alu_cpf'=>'04103775114','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'LEONEOUTON OLIVEIRA ALENCAR','alu_cpf'=>'03905113317','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'MAIANA DA COSTA CALDAS','alu_cpf'=>'03663262103','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'SELMA PINTO DA SILVA','alu_cpf'=>'80946330344','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'FABIO RODRIGUES DOS REIS','alu_cpf'=>'97082350325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'IONILCE SOARES RABELO','alu_cpf'=>'85232351320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'CLEONILDES CONCEICAO DO NASCIMENTO','alu_cpf'=>'81372060359','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>13,'alu_nome'=>'BENTO DA COSTA SILVA FILHO','alu_cpf'=>'92182860304','alu_tel'=>'']);

        /* Alunos Pedagogia Grajaú Turma C */
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'MARIA DO SOCORRO VIANA ','alu_cpf'=>'88071081353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'JESSICA ANGELO DA SILVA','alu_cpf'=>'05794733330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'MARIA  ANIEDE BARROS DA SILVA SOUZA','alu_cpf'=>'17960096368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'GISSELEDESOUSAARAUJO','alu_cpf'=>'64750540382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'Rosilene Vieira de Sousa Lima','alu_cpf'=>'63645718320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'CASSIA NOEME LIMA DOS SANTOS ','alu_cpf'=>'02623229350','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'MARIA BETANIA ANDRADE GUIMARAES','alu_cpf'=>'01770429310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'ANDREIA SOUSA E SILVA','alu_cpf'=>'00246882310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'DILMARIA DE JESUS SANTOS','alu_cpf'=>'00337923302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'GEREMIAS SILVA RODIGUES','alu_cpf'=>'00662173341','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'FLAVIO SOUSA LEDA','alu_cpf'=>'02543413308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'ELINAEL DASILVA ALENCAR ','alu_cpf'=>'02895685363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'JOAO BENTO RIBEIRO FILHO','alu_cpf'=>'04135241328','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'ANTONIA COSTA  SILVA','alu_cpf'=>'03994038332','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>14,'alu_nome'=>'ADOAN SIRINO DA SILVA','alu_cpf'=>'03646746360','alu_tel'=>'']);

        /* Alunos Serviço Social Grajaú*/
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'RITA FILOMENA FERREIRA BRANDAO SOARES','alu_cpf'=>'26889714334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'RICLEIA BARROS SA','alu_cpf'=>'05476934359','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'KRILEY DAYANNE DE OLIVEIRA ALVES','alu_cpf'=>'05944476311','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'NAIARA PORTILHO LIMA','alu_cpf'=>'06598737370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'MAIANE DA SOUSA','alu_cpf'=>'06459608377','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'CASSIA FERNANDA SILVA DOS SANTOS','alu_cpf'=>'06392404376','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'RAYANAM DA SILVA SANTOS','alu_cpf'=>'06212548358','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ERICA DE SOUSA VIEIRA','alu_cpf'=>'05980225382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ARTEMISSA SHARLIANE RIBEIRO SOUSA','alu_cpf'=>'06812298379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'DAIANE GOMES DA SILVA','alu_cpf'=>'06799134320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ANDRIELA  ALVES RODRIGUES','alu_cpf'=>'67117180382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ELIEUDA DE OLIVEIRA SILVA MELO','alu_cpf'=>'77561473320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'CELIA DA SILVA RAMALHO','alu_cpf'=>'60273864360','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'PAULA DE SA BARROS','alu_cpf'=>'60273724355','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'MARLENE DA SILVA RAMOS','alu_cpf'=>'56790970100','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ANTONIO WILSON SOARES DO NASCIMENTO  ','alu_cpf'=>'01387962388','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'JOANA DARQUE DA SILVA','alu_cpf'=>'02319123318','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ELOIDE DA SILVA  ALVES','alu_cpf'=>'01871288398','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'CREUSENIR RODRIGUES DA SILVA','alu_cpf'=>'00233906380','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'HUGO DELEON DA SILVA LOIOLA','alu_cpf'=>'00986870340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'MARIA GEANA CARDOSO DE ARAUJO','alu_cpf'=>'00646470302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'EDINEIDE FERREIRA LIMA','alu_cpf'=>'04457807389','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ANTONIO REIS SANTANA','alu_cpf'=>'04783184305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'SANGELA  ARAUJO OLIVEIRA','alu_cpf'=>'04649908310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'CINDE PORTILHO LIMA','alu_cpf'=>'04611817113','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'VALDEIRES DE SOUSA FARIAS','alu_cpf'=>'04473689310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'JULLIK MARLEY MASQUITA MACHADO','alu_cpf'=>'05099148379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'RAIANA DA SILVA SANTOS','alu_cpf'=>'05099026346','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'CREUSILENE CRUZ DOS SANTOS','alu_cpf'=>'04909746358','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'DIANA ALVES CARVALHO','alu_cpf'=>'02648217347','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'JUCELIA LIMA DA SILVA','alu_cpf'=>'03491301327','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'LUCIANA ALVES BELFORT','alu_cpf'=>'99448904304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'MARIA LEOMAR PEREIRA SILVA','alu_cpf'=>'97943070330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'IVANETE XAVIER ALBUQUERQUE','alu_cpf'=>'84832746391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'DEUZIANE BATISTA RAMALHO','alu_cpf'=>'90869680315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'EDILSON PEREIRA ALVES','alu_cpf'=>'90322630304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'ANA DA SILVA FERREIRA','alu_cpf'=>'89235347300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'BERENICE DOS SANTOS OLIVEIRA','alu_cpf'=>'95629327372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>15,'alu_nome'=>'SABINA MARIA DA SILVA RIBEIRO','alu_cpf'=>'95090630372','alu_tel'=>'']);



        /* Alunos de Pós-Gaduação A 2016 */
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'JOELMA DE SOUSA MARTINS              ','alu_cpf'=>'01159383383','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'EDIVALDO ARAUJO FERREIRA             ','alu_cpf'=>'90459490168','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'ALBERTINA DE CARVALHO SOUSA          ','alu_cpf'=>'01006087362','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'ANA LAURA  ALVES OLIVEIRA            ','alu_cpf'=>'01617987131','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'FABIOLA SANTOS LIMA DE OLIVEIRA      ','alu_cpf'=>'99301890330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'MAYRA OLIVEIRA SILVA                 ','alu_cpf'=>'02630701310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'FRANCISCO DAVI MENDES DA SILVA       ','alu_cpf'=>'01660221366','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'MARIA ITELVINA RESPLANDES GOMES      ','alu_cpf'=>'21639450300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'ANTONIO WESLEY GOMES DE AMORIM SANTOS','alu_cpf'=>'04585815180','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'JACQUELINE BARBOSA OLIVEIRA BRITO    ','alu_cpf'=>'95103082349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'DULCILEIA RODRIGUES DA SILVA         ','alu_cpf'=>'94773823372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'LUTIANA PEREIRA DE CARVALHO          ','alu_cpf'=>'60258537388','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'KELIANNA QUEIROZ COSTA               ','alu_cpf'=>'99386100304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'MARIA SELMA PEREIRA DA ROCHA         ','alu_cpf'=>'01638228329','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'LUCIANE BEZERRA BARBOSA              ','alu_cpf'=>'02887515314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'MARIA SIMONE SANTOS DIAS             ','alu_cpf'=>'28253256353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'FRANNCISCO DE PAULO SOUSA SILVA      ','alu_cpf'=>'02846208310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'TICIANE DE OLIVEIRA MELO             ','alu_cpf'=>'64215075300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>16,'alu_nome'=>'LUCIANA DE JESUS FURTADO FERNANDES   ','alu_cpf'=>'85627275391','alu_tel'=>'']);

        /**
         *
         * TURMAS DE SÍTIO NOVO - MA
         */

        /* Alunos de Pedagogia Sitio Novo */
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ITAMARA MARIA GONCALVES VIANA','alu_cpf'=>'95927506372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ALIDES SILVA C               ','alu_cpf'=>'01635406323','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ELIKA BARROS PINHEIRO        ','alu_cpf'=>'01529053323','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'KEDIMA MIRANDA DE SOUSA      ','alu_cpf'=>'60168309335','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ZAIRA CRISTINA R ARAUJO','alu_cpf'=>'60166998370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'SOLANGE CARVALHO ALVES SILVA','alu_cpf'=>'60602575346','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'IANNATHAN MARINHO DE SOUSA','alu_cpf'=>'05827768308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'RAIMUNDO MACHADO DE CARVALHO','alu_cpf'=>'29044715372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'MARIA JOELMA FERNANDES DE SOUSA','alu_cpf'=>'05473024360','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'DAYCE CARVALHO MOTA SANTOS','alu_cpf'=>'60870077333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'JOYCE BATISTA DE OLIVEIRA','alu_cpf'=>'01558128310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'VANUSIA MORAIS DASILVA','alu_cpf'=>'00861547373','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'EURIANA DO NASCIMENTO RAPOSO','alu_cpf'=>'00751975370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ISABEL LILIAN DO NASCIMENTO BARBOSA','alu_cpf'=>'04834030326','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'LORRANA DOS REIS SANTOS','alu_cpf'=>'04425595343','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'CARLIANA SANTOS GALVAO','alu_cpf'=>'04897155320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'RITA DE CASSIA DO NASCIMENTO RAPOSO','alu_cpf'=>'04868958313','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ELZA DE SOUSA MILHOMEM','alu_cpf'=>'03433341354','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'MAIARA MARCIEL BATISTA VIANA','alu_cpf'=>'03214438379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'ALBERTA SILVA PINHEIRO','alu_cpf'=>'04206958343','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'LINDAURA AMORIM CARVALHO','alu_cpf'=>'03474341340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'GABRIEL MARCIEL EVANGELISTA','alu_cpf'=>'02999947321','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'LUCILIA FEITOSA DA SILVA','alu_cpf'=>'04137365393','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'IRACELMA DACOSTA M CARVALHO','alu_cpf'=>'03719247317','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'SEBASTIANA DE MIRANDA SILVA','alu_cpf'=>'93647433187','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'TEREZINHA SOUSA DA SILVA','alu_cpf'=>'99869799353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'LEDIANE PEREIRA OLIVEIRA','alu_cpf'=>'98704613368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>17,'alu_nome'=>'RAIMUNDINHA BANDEIRA COELHO FREITAS','alu_cpf'=>'03936981302','alu_tel'=>'']);




        /* Alunos Pedagogia I */
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'ILDENI SANTOS PONTES','alu_cpf'=>'28245610330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'VANESSA BARRA NASCIMENTO','alu_cpf'=>'06748048303','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'NILBETH NASCIMENTO SOUSA','alu_cpf'=>'11442992760','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'LEONILSON SOUSA ALVES','alu_cpf'=>'68527209268','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'TATIANA SENA  ASSIS','alu_cpf'=>'00077174313','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'ALCENIRA JOZINA DE ARAUJO','alu_cpf'=>'72414464372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'VALDIRENE FERREIRA DA CONCEICAO','alu_cpf'=>'64152251387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'MARIA ELIMAR DE CASTRO','alu_cpf'=>'63885778300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'KATHLEEN KEROLLAYNE SILVA COSTA OLIVEIRA','alu_cpf'=>'61083668340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'ROBERTA DE ARAUJO SOUZA','alu_cpf'=>'60767991370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'CRISTIANE ALVES DE SOUSA','alu_cpf'=>'01887945300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'ADRIANA FERREIRA ARAUJO PEREIRE','alu_cpf'=>'01447117379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'GESILENE MATIAS DE SOUSA','alu_cpf'=>'02304352111','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'ELIENE DA CONCEICAO SOUZA','alu_cpf'=>'00614514363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'DJALMA SOARES CHAGAS FILHO','alu_cpf'=>'04417355339','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'MARIA DE FATIMA DA SILVA DOS SANTOS','alu_cpf'=>'04362786341','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'EULANIA ALVES DE SOUSA','alu_cpf'=>'04358963340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'JESSICA STTFF PEREIRA MELO','alu_cpf'=>'04347029357','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'FLAVIANA GOMES PEREIRA','alu_cpf'=>'03279703328','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'VANESSA DA SILVA QUEIROZ','alu_cpf'=>'04584866392','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'POLYANA NONATA DA SILVA DUARTE','alu_cpf'=>'04697225333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'MARLIZETE ALVES DA SILVA','alu_cpf'=>'03865172318','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'NUBIA  JARDIM DA SILVA','alu_cpf'=>'01984685120','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'LUZINEIDE  BARBOSA OLIVEIRA','alu_cpf'=>'43749267391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'MARCIA REJANE DESOUSA SOARES ','alu_cpf'=>'84485442349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'LOURANY RODRIGUES SILVA','alu_cpf'=>'92734049368','alu_tel'=>'']);
        //OBS Aluno com cpf duplicado
        //Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'FRANCILENE DE FRANCA SILVA','alu_cpf'=>'78025931315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'ANA MARIA SOUSA DA SILVA','alu_cpf'=>'90027620387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'RUTH GEREMIAS DE OLIVEIRA','alu_cpf'=>'01556933363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>18,'alu_nome'=>'RAQUEL SANTOS MELO','alu_cpf'=>'60282731393','alu_tel'=>'']);


        /** Aluno Pós-Graduação B 2015 */
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'IRIS DE MORAES SJUNIOR','alu_cpf'=>'76023540104','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'DANIELE PEREIRA DA SILVA','alu_cpf'=>'02463880309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'CAMILA SILVA DEOLIVEIRA','alu_cpf'=>'04171825385','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'GLEIDE VANIA DA SILVA PINHEIRO','alu_cpf'=>'00386931356','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'ERINALVA RIBEIRO DE SOUSA','alu_cpf'=>'41299132391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'KLEBERSON LUIS SILVA PEREIRA','alu_cpf'=>'94564957104','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'MARIA DA PAZ PEREIRA DA SILVA','alu_cpf'=>'34621261304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'GILCELIA SIPIAO CHAVES','alu_cpf'=>'96456442320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'ELIUDE CARVALHO SOUSA','alu_cpf'=>'99919931349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'GERINALVA BORGES DA SILVA','alu_cpf'=>'01456374338','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>19,'alu_nome'=>'ELDA GOMES DE SOUSA','alu_cpf'=>'00417167369','alu_tel'=>'']);

        /** Aluno do ENSINO MÉDIO  */
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'MARIA DAS GRACAS DE LIMA SOUZA','alu_cpf'=>'33389268391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'MARIA DO ESPIRITO SANTO DE SOUSA SILVA','alu_cpf'=>'40213064391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'MARIA ANTONIA BRAGA DE BRITO SILVA','alu_cpf'=>'26878003334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'MARIA PEREIRA SOUZA','alu_cpf'=>'15884996349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'JONATAS NOBRE DE MESQUITA','alu_cpf'=>'13797727372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'MARIA LUCIA BARROS SOUSA','alu_cpf'=>'13481282320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'ALESSANDRA MORAES DA SILVA','alu_cpf'=>'67257208387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'JOSIMAR FARIAS CANTANHEDE','alu_cpf'=>'58671153215','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'LUZIANNE AZEVEDO DASILVA','alu_cpf'=>'60800102320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'RICARDO CRISTIAN VIEIRA DA SILVA','alu_cpf'=>'01741059321','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'MARCIA MONTEIRO OLIVEIRA','alu_cpf'=>'00553911333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'ANTONIA UELMA SILVA  BARROS LIMA','alu_cpf'=>'04875152345','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'JOAO PAIVA LEITAO NETO','alu_cpf'=>'03754423169','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'SANDRA  CONCEICAO DE MORAIS','alu_cpf'=>'83628339391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'ANTONIA NEIDE ALVES M DA SILVA','alu_cpf'=>'91934940330','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'VALDIRENE OLIVEIRA E SILVA','alu_cpf'=>'91784891304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>20,'alu_nome'=>'VANILDA DE SOUSA MARCIEL LIMA','alu_cpf'=>'86697897368','alu_tel'=>'']);


        /** Alunos INDEPENDENTE  */
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JEANY RIBEIRO ARAUJO PEREIRA','alu_cpf'=>'90500938334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'EDILEUDE FERNANDES AZEVEDO','alu_cpf'=>'62615726315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'KELLEN CANELA R SILVA','alu_cpf'=>'77221354391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'RUITER SILVA  AMAZONAS','alu_cpf'=>'29113547372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ANA DALVA GOMES COSTA','alu_cpf'=>'17726832304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'RAQUEL ESTRELA LIMA SANTOS','alu_cpf'=>'61484024320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARINETE SANTOS MATOS','alu_cpf'=>'25439375368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARIA DE FATIMA PEREIRA','alu_cpf'=>'27197824320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ELIANE RODRIGUES GORGE','alu_cpf'=>'25066803300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARILENE CALISTO SILVA','alu_cpf'=>'27211428368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'RAIMUNDO NONATO DOS SANTOS ','alu_cpf'=>'24304522353','alu_tel'=>'']);
        //OBS essa aluna aparece em duas turmas diferentes
        //Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARCIA  MONTEIRO OLIVEIRA','alu_cpf'=>'00553911333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'VANIA LUCIA RODRIGUES DA COSTA','alu_cpf'=>'94448299368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JANAINA SILVA SA','alu_cpf'=>'52382583304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'CRISTIANE RODRIGUES NASCIMENTO','alu_cpf'=>'69246050363','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'SANDRA   LUISA   MILHOMEM','alu_cpf'=>'71580123368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'FRANCIKLEY SILVA DE SOUZA','alu_cpf'=>'62633694349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'LINDAURA CARDOSO LUCENA','alu_cpf'=>'33357145391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'DULCIMAR LIMA DA COSTA ARAUJO','alu_cpf'=>'80695574353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ALDENIRA DOS SANTOS BRITO','alu_cpf'=>'16784693272','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'DANYELE CAMPOS LEANDRO DA SILVA','alu_cpf'=>'00656050390','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'FRANCINILADA DE SOUSA NASCIMENTO','alu_cpf'=>'01878868306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'SILVIO PEREIRA MATOS','alu_cpf'=>'32887205315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARIA GORETH SOUSA S SILVA','alu_cpf'=>'28238770378','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'FRANCISCO AMANCIO','alu_cpf'=>'48718750320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARIA COSTA OLIVEIRA','alu_cpf'=>'22379045100','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ALAIRES DA CONCEICAO SOUSA','alu_cpf'=>'75389959353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JERIMARIO MACEDO','alu_cpf'=>'01039213383','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'BRUNA RAFAELA MARTINS DIAS','alu_cpf'=>'61559227303','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'DELSON DE JESUS C CORREIA','alu_cpf'=>'57153329315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ADRIEL OLIVEIRA DOS SANTOS','alu_cpf'=>'91933951320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ADRIANA DE LIMA SOUSA','alu_cpf'=>'61465302395','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'WANDRYS NASCIMENTO DE SOUSA','alu_cpf'=>'60056839340','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JANIO DE OLIVEIRA VERRISSIMO','alu_cpf'=>'92965261400','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'VANDA LUCIA DE SOUSA FIALHO','alu_cpf'=>'80727581368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'DANILA GOMES DA SILVA OMIZZOLO','alu_cpf'=>'01720545324','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JOSE FERNANDES DE MOURE','alu_cpf'=>'15839389315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'ADAILDO PEREIRA','alu_cpf'=>'44887175272','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'LENILDA COSTA SILVA','alu_cpf'=>'75611562353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'RUBERNILTON DOS SANTOS ','alu_cpf'=>'51042339287','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'MARIA DE FATIMA  ARAUJO NASCIMENTO ','alu_cpf'=>'10121030300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JOSE FRANCILDO GOMES','alu_cpf'=>'85805084368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JOSE DE RIBAMAR ALMEIDA LIRA JUNIO','alu_cpf'=>'82477183320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'LYA AGUIAR DOS SANTOS','alu_cpf'=>'65001958334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>21,'alu_nome'=>'JUSCILEIA DE SOUZA FREITAS A GOMES ','alu_cpf'=>'75272890310','alu_tel'=>'']);

        /** Aluno de Pedagogia A 2015 */
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'SUSANA JAMYLA  DA SILVA OLIVEIRA','alu_cpf'=>'01233005332','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'DEUSIRENE PEREIRA DE OLIVEIRA','alu_cpf'=>'03256955398','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'ROSIRENE NUNES RIBEIRO','alu_cpf'=>'36556653349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'ISLANY MARIA ESCORCIO ARAUJO ','alu_cpf'=>'61079942386','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'EDILENE PEREIRA ROCHA','alu_cpf'=>'82952760349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'DARLE ANA DA SILVA BARROS','alu_cpf'=>'60814354319','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'ENEDINA EUGENIA SOUSA DE OLIVEIRA ','alu_cpf'=>'32104715334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'ELRIANE COSTA DE ANDRADE','alu_cpf'=>'02492291103','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'BRENDA LIMA SOUSA','alu_cpf'=>'05894547300','alu_tel'=>'']);
        //Obs aluno aparece em dois cursos
        //Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'EDELMARA MENESES RODRIGUES','alu_cpf'=>'01896751369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'RICARDO PIRANGI LIMA','alu_cpf'=>'02240927313','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'RUBENILDE FERREIRA CORREA DE SOUSA','alu_cpf'=>'98594206372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'FRANCISCA OLISANGELA C A BAILEY','alu_cpf'=>'02754253394','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'RUAN LABRE GABRIEL DA SILVA ','alu_cpf'=>'03959854390','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'LUCIANA  ALVES DO NASCIMENTO','alu_cpf'=>'06213577319','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'RAINE DE SOUSA FRANCO','alu_cpf'=>'04409792342','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'LUCIANA DA SILVA LIMA','alu_cpf'=>'00581128397','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'LARISSA SAMPAIO SANTANA','alu_cpf'=>'03730822314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'ELIANE OLIVEIRA DE QUEIROZ','alu_cpf'=>'78535468315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'KLICYANE ALVES LIMA','alu_cpf'=>'00940036371','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'CARLEANY SOBRAL SOUSA DE OLIVEIRA ','alu_cpf'=>'60730019322','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'MARIA GILDERLANE DA ROCHA REIS','alu_cpf'=>'60180264303','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'JACIANE DE BRITO CAVALCANTE','alu_cpf'=>'02561811360','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'DHESSYCA PEREIRA DE MELO','alu_cpf'=>'05737760324','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'LUANA NONATA DA S PEDROSA','alu_cpf'=>'04263181379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'MARIA  APARECIDA MACHADO HERENIO','alu_cpf'=>'48744204353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'JOSELMA SOUSA SILVA','alu_cpf'=>'79181848315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'ILENILDE DOS SANTOS NOLETO','alu_cpf'=>'52304060382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>22,'alu_nome'=>'JULIANA COSTA OLIVEIRA','alu_cpf'=>'07610330922','alu_tel'=>'']);

        /* Alunos Pedagogia Brejão */
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'RAIFRAN GOMES MOURA','alu_cpf'=>'93731396300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'SELMA PORTO FREITAS','alu_cpf'=>'01803257369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'FABIANA DE SOUZA SIQUEIRA','alu_cpf'=>'02563352304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'MARINA CARNEIRO DE SOUZA DE ALMEIDA','alu_cpf'=>'65898591320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'GLEYCIANE RAPOZO ASSUNCAO RODRIGUES','alu_cpf'=>'98703617300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'EDVANE DOS SANTOS LIMA','alu_cpf'=>'00290380308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'JAIRES DOS REIS CARVALHO','alu_cpf'=>'60649159357','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ANTONIO PEDRO CARVALHO DA HORA','alu_cpf'=>'60648495337','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ADRIANA OLIVEIRA DE JESUS','alu_cpf'=>'84118270382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'MARIA DO ROZARIO LEMO DA SILVA','alu_cpf'=>'00110058313','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'CARLOS ALEXANDRE ASSUNCAO SILVA','alu_cpf'=>'60821417339','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ELEN LORENNA BRITO DE PAULO','alu_cpf'=>'60757352324','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'NELIA PAULA SILVA DE SOUSA','alu_cpf'=>'02381172351','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'IRACY FERNANDES SANTOS','alu_cpf'=>'27072100300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ANA DANIELY DE SOUSA NASCIMENTO','alu_cpf'=>'04729291352','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'BRUNO EDUARDO SILVA SOLSA','alu_cpf'=>'60868700398','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ALESSANDRA CARLOS GONGALVES','alu_cpf'=>'60674528395','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'EDILENE FERREIRA DA SILVA','alu_cpf'=>'02089005513','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ANTONIA ELIZA FERREIRA DE SOUSA','alu_cpf'=>'60639992307','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'LUANA MIRELI FERREIRA DE SOUSA ','alu_cpf'=>'60639976360','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'LIDIA BATISTA MENEZES','alu_cpf'=>'04646907305','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'LIDIA BORGES ARAUJO SILVA','alu_cpf'=>'60283544309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'FRANCIVALDO RAMOS DOS SANTOS','alu_cpf'=>'06084954332','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'EDSON BARBOSA SILVA','alu_cpf'=>'02501226348','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'JUCILEIDE SALES DOS SANTOS','alu_cpf'=>'02871626308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'KEILA MENEZES BATISTA','alu_cpf'=>'05222886344','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'LEIRIANE NASCIMENTO BRANDAO','alu_cpf'=>'02403301370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'KARLA KAIRELLI SILVEIRA DE SOUSA','alu_cpf'=>'01685004504','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'ADINALVA DA SILVA RIBEIRO AMARAL','alu_cpf'=>'02643039386','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'JARLENE DE SOUSA','alu_cpf'=>'01001732332','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'SUELY OLIVEIRA DA SILVA','alu_cpf'=>'03585256325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'CARLA DINIZ  ARAUJO','alu_cpf'=>'60916161374','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'FRANCISCA OLIVEIRA DE SANTANA','alu_cpf'=>'00834370379','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'MAGNA PEREIRA DA SLIVA FERREIRA','alu_cpf'=>'02146859342','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'FERNADA CORDEIRO PORTO','alu_cpf'=>'06412966307','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'EDISON RODRIGUES DA SILVA','alu_cpf'=>'60678078319','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'VALTEIR DA SILVA','alu_cpf'=>'02446415369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>23,'alu_nome'=>'FABIO JOSE SOUSA CONCEICAO','alu_cpf'=>'00298276399','alu_tel'=>'']);

        /* Alunos Pedagogia LAJEADO */
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ALDERINA FRANCO BARROS','alu_cpf'=>'28562860115','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ANTONIA DE ARAUJO RODRIGUES','alu_cpf'=>'41289773300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARINALVA NUNES DE SOUSA','alu_cpf'=>'40219690391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'IVONETE PEREIRA SOUSA BANDEIRA','alu_cpf'=>'26369923168','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'KAREN DE ALMEIDA DE OLIVEIRA','alu_cpf'=>'70943184134','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'LUCE MARIA CARNEIRO DOS SANTOS','alu_cpf'=>'64640353200','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'SILVIO CESAR SANT ANA','alu_cpf'=>'73442585368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARCONE DO NASCIMENTO FERRREIRA','alu_cpf'=>'60409063320','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'GIRLANE DOS SANTOS BARROS','alu_cpf'=>'01850287139','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA DE FATIMA SOUSA LIMA','alu_cpf'=>'01744788367','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARLENE SILVA GONCALVES','alu_cpf'=>'02506161309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ALEX PEREIRADESOUSA','alu_cpf'=>'02486647350','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'IRACY LOPES DOS SANTOS','alu_cpf'=>'02392341389','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARINA SOUSA MIRANDA ARAUJO','alu_cpf'=>'02254583301','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ILDENIRA RIBEIRO ROCHA','alu_cpf'=>'02255819309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'CELIA ARAUJO DE SOUSA','alu_cpf'=>'00190935359','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'CLAUDIANA RODRIGUES MACHADO','alu_cpf'=>'00923004300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA  LEIDIANE ABREU MARTINS PIMENTEL','alu_cpf'=>'01076635385','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'CRISTIANO RIBEIRO DE SOUSA','alu_cpf'=>'04614861300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'SORAIA PEREIRA DA SILVA','alu_cpf'=>'05460086310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'JOICELENE SILVA DOS SANTOS','alu_cpf'=>'05184303324','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'EITACIANE SANTANA BEZERRA','alu_cpf'=>'04278661380','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'LETICIA MARTINS BANDEIRA','alu_cpf'=>'05027945345','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'EVA DOS SANTOS BARROS','alu_cpf'=>'03618092393','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA DIVINA COUTINHO DOS SANTOS','alu_cpf'=>'81858396387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'EGIVANDO GOMES ROCHA','alu_cpf'=>'00476850347','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'LUCIANA MARIA DE LUCENA','alu_cpf'=>'33150544874','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA ELENICE MARTINS FERREIRA','alu_cpf'=>'01076634303','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'LUSINETE PEREIRA DE MIRANDA','alu_cpf'=>'95117210387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA ARLETE RODRIGUES DOS SANTOS','alu_cpf'=>'85035777391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'JACIRENE RODRIGUES MARTINS','alu_cpf'=>'85018120304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'SUEILA MARIA ABREU BARROS','alu_cpf'=>'82256993353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ZELMA MARIA BARROS DA SILVA','alu_cpf'=>'85977756372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MEIRIVANE ROCHA BANDEIRA DE ASSIS','alu_cpf'=>'82240710306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA SONIA SOUSA BEZERRA BARROS','alu_cpf'=>'81411421353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'RAIMUNDA GOMES BARROS','alu_cpf'=>'92042880353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ANTONIA ELIZANGELA DE JESUS LOURA','alu_cpf'=>'62169572368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'VALQUIRIA PIMENTEL DA SILVA','alu_cpf'=>'95774890368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'JOSEFA MELO FERREIRA DIAS','alu_cpf'=>'74119192172','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARLEIA SANTOS FEITOSA','alu_cpf'=>'05350550306','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'VANDERLEIA  DE ABREU BARROS','alu_cpf'=>'91670713334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'SIMONE MACHADO DOS SANTOS','alu_cpf'=>'95731032300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA RAIMUNDA RESPLANDE DA SILVA','alu_cpf'=>'84213280349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'LUISA INES ABREU MARTINS DE ALMEIDA','alu_cpf'=>'01076636357','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'MARIA LENY PEREIRA DE CASTRO','alu_cpf'=>'85682993349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ARLEANE FONSECA BELEM','alu_cpf'=>'97384410304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ANA CAROLINA BEZERRA DE SOUSA','alu_cpf'=>'02174848325','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'OSVALDINA  LOPES SILVA','alu_cpf'=>'69472858368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'JOANA SOUSA  DA SILVA','alu_cpf'=>'02486650300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'DENISE GOMES CANTANHEDE','alu_cpf'=>'00969743386','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'ELIETE DOS SANTOS SANTANA','alu_cpf'=>'57669090391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>24,'alu_nome'=>'CARMITA DE MIRANDA BANDEIRA','alu_cpf'=>'03987580348','alu_tel'=>'']);

        /** alunos de Pós-Graduação A 2015 */
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'VILENE MARIA FERREIRA DE PAULA','alu_cpf'=>'75427044353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'WDESLEIA BATISTA DASILVA','alu_cpf'=>'04412921190','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'OSMARIA DO ESPIRITO SANTOS SILVA','alu_cpf'=>'62377647120','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SARA POLIANE DE BRITO OLIVEIRA','alu_cpf'=>'01783778300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'VALDENILTON LOPES CAVALCANTE','alu_cpf'=>'75975114349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'AUEDILA PINHEIRO','alu_cpf'=>'01902773357','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SANDRA DE OLIVEIRA SANCHES','alu_cpf'=>'48726257300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'JAKELINE PATRICIA T SILVA','alu_cpf'=>'64934870300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SEBASTIANA CELIA PEREIRA DE ARAUJO ','alu_cpf'=>'40292550359','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SUANNARA FARIAS O DE CARVALHO','alu_cpf'=>'02295730376','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'VERONICA MONTEIRO BANDEIRA','alu_cpf'=>'88365930382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'FRANCISCA EDILEUZA TAVARES DA SILVA','alu_cpf'=>'63596512387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SHIRLEY CRUZ GOMES ','alu_cpf'=>'67306683349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MARCIA CARDOSO REGO SILVA','alu_cpf'=>'03583425383','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ERIKA SALES BEZERRA','alu_cpf'=>'01380030331','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'EDELMARA MENESES RODRIGUES','alu_cpf'=>'01896751369','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ESTELA BANDEIRA MELO','alu_cpf'=>'97725196315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SILVIA SANTOS DE SOUSA','alu_cpf'=>'02472819307','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'LUCIANA MENDES BRAGA','alu_cpf'=>'64449734300','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ALBERLENE SALES SILVA','alu_cpf'=>'02692128338','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ELENILSON ALVES GOMES','alu_cpf'=>'01346807310','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'EDILEUSA VIDAL DE BRITO','alu_cpf'=>'72293985334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'DEUSA MARIA RABELO COSTA','alu_cpf'=>'47622997315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'FLAEDNA LIMA LUZ','alu_cpf'=>'98505831349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'BRUNA MORAIS DE MOURA','alu_cpf'=>'02501224302','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'KATIUSCIA  DA COSTA','alu_cpf'=>'09232391708','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MARCIA MIRANDA F DIAS','alu_cpf'=>'01881407195','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ROZANA SANTOS SOUSA','alu_cpf'=>'03068984386','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'GERLAN SOUSA DA COSTA','alu_cpf'=>'05910990390','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MARIA DAS GRACAS DA SILVA CONCEICAO','alu_cpf'=>'62042246387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'TANIA LOPES DOS SANTOS','alu_cpf'=>'00643526331','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'DANIEL COSTA','alu_cpf'=>'55121411391','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'JESSICA MIKAELY ALVES DASILVA','alu_cpf'=>'09537835456','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'CACILDA DE SOUSA REIS','alu_cpf'=>'14749084387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ELIANA CARDOSO DE OLIVEIRA','alu_cpf'=>'05911021374','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'JAYLENE DAMACENO SILVA','alu_cpf'=>'04040486331','alu_tel'=>'']);
        //Obs aluna com CPF incorreto
        //Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MARIA APARECIDARIBEIRO LIMA','alu_cpf'=>'00000000000','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MARIA GORETE BATISTA','alu_cpf'=>'15850234349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'DANIEL CONCEICAO NASCIMENTO','alu_cpf'=>'00271495367','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SIMONIA SOUSA B DE OLIVEIRA','alu_cpf'=>'61556009372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'RAQUEL SILVA DOS SANTOS','alu_cpf'=>'00620120371','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'DANIELA MARIA B PEREIRA','alu_cpf'=>'22469605334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ADRIANA DOS S OLIVEIRA','alu_cpf'=>'01155289382','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'LETICIA R BANDEIRA','alu_cpf'=>'67317162353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ANTONIA SOUSA SILVA','alu_cpf'=>'60191542385','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'WILIANN RIBEIRO SILVA','alu_cpf'=>'60018673309','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'CRISTIANE DOS ANJOS CORREA','alu_cpf'=>'00714697370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ERNESTO FRANCA DOS REIS','alu_cpf'=>'94257566353','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ALDYNAMARA LAMARQUES SOUSA','alu_cpf'=>'03500231314','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'LILIA ALVES DE ARAUJO SANTOS','alu_cpf'=>'04858215326','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ANTONIO MARCOS LEMOS SANTOS','alu_cpf'=>'03430479347','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'DULCE MOREIRA DUARTE','alu_cpf'=>'25317377315','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'NEIDE MARIA DE O FARIAS','alu_cpf'=>'32900570387','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'LUCIANA SILVA DOS SANTOS','alu_cpf'=>'00256649308','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SARA GABRIELASILVA','alu_cpf'=>'01808719190','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'LEIDILANDIA OLIVEIRA LIMA','alu_cpf'=>'01723270326','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'SOLANGE GUIMARAES DE SOUSA BRANDAO','alu_cpf'=>'58593098304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'IRISMAR NASCIMENTO MARTINS','alu_cpf'=>'48769690359','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'ANDREA SILVA DE CASTRO','alu_cpf'=>'02183155388','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MARIA JULIA GOMES DE PAIVA','alu_cpf'=>'34577874334','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'CAROLINEA BATISTA DE OLIVEIRA','alu_cpf'=>'02720652342','alu_tel'=>'']);
        //Obs aluna com CPF incorreto
        //Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'EDIANE CRUZ DE SOUSA','alu_cpf'=>'00000000000','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'IZABEL CRISTINA LEAL DA SILVA','alu_cpf'=>'87543621304','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'CONCITA CONCEICAO DE MARIA M DUARTE','alu_cpf'=>'40168883368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'MATUZALEM SOARES DA COSTA','alu_cpf'=>'02379602301','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>25,'alu_nome'=>'VANDA LUCIA KURSTEN','alu_cpf'=>'44574649372','alu_tel'=>'']);

        /** Alunos de Pós-Graduação COCOS */
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'ARINETE DE ALMEIDA FERREIRA','alu_cpf'=>'34329803372','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'DOMINGOS SOUSA SA','alu_cpf'=>'70318379368','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'MARQUEANE ALVES DA COSTA','alu_cpf'=>'60210482370','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'SHEILA BRAGA LIMA','alu_cpf'=>'01345600356','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'EVNILDA PEREIRA DE MELO ','alu_cpf'=>'03592349333','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'PERINA FERNANDES PEREIRA SA','alu_cpf'=>'84930276349','alu_tel'=>'']);
        Aluno::create(['alu_tur_id'=>26,'alu_nome'=>'ANA LUCIA SANTOS DE SOUSA','alu_cpf'=>'85935018349','alu_tel'=>'']);

    }
}