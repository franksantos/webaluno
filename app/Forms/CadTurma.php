<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CadTurma extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->add('data_inicio_turma', 'date', ['attr' => ['class' => 'form-control field-input'], 'label' => 'Data de In�cio da Turma'])
        ->add('curso', 'select', ['attr' => ['class' => 'form-control field-input'], 'label' => 'Selecione o curso da Turma'], ['choice' => ['1' => 'Aconselhamento B�blico',
        '2' => 'Alfabetiza��o e Letramento',
        '3' => 'Arte na Educa��o',
        '4' => 'Direito Administrativo',
        '5' => 'Direito Aplicado � Educa��o',
        '6' => 'Direito do Consumidor',
        '7' => 'Direito do Trabalho',
        '8' => 'Direito Empresarial',
        '9' => 'Direito Imobiliario',
        '10' => 'Direito Penal',
        '11' => 'Direito Tribut�rio',
        '12' => 'Doc�ncia de Ensino Superior',
        '13' => 'Educa��o Ambiental',
        '14' => 'Educa��o de Jovens e Adultos - EJA',
        '15' => 'Educa��o Especial e Inclusiva',
        '16' => 'Educa��o Infantil',
        '17' => 'Especializa��o em Apolog�tica',
        '18' => 'Especializa��o em Cultura e L�ngua Hebraica',
        '19' => 'Especializa��o em Educa��o � Dist�ncia - EAD',
        '20' => 'Especializa��o em Educa��o Religiosa',
        '21' => 'Especializa��o em Empreendedorismo',
        '22' => 'Especializa��o em Estudos da Tor� (Torah)',
        '23' => 'Especializa��o em Marketing',
        '24' => 'Especializa��o em Minist�rio Pastoral',
        '25' => 'Especializa��o em Missiologia',
        '26' => 'Especializa��o em Teologia Sistem�tica',
        '27' => 'Gest�o Ambiental e Sustentabilidade',
        '28' => 'gest�o Cont�bil',
        '29' => 'Gest�o da Informa��o',
        '30' => 'Gest�o de Finan�as'], null, 'empty_value' => 'Selecione o curso'])
        ->add('nome_turma', 'text', ['attr' => ['class' => 'form-control field-input'], 'label' => 'Nome da Turma'])
        ->add('btn_salvar', 'submit', ['label' => 'Salvar'])
        ->add('btn_pesquisar', 'button', ['label' => 'Pesquisar']);

    }
}
