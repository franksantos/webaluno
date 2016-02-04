<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CadTurma extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->add('data_inicio_turma', 'date', ['attr' => ['class' => 'form-control field-input'], 'label' => 'Data de Início da Turma'])
        ->add('curso', 'select', ['attr' => ['class' => 'form-control field-input'], 'label' => 'Selecione o curso da Turma'], ['choice' => ['1' => 'Aconselhamento Bíblico',
        '2' => 'Alfabetização e Letramento',
        '3' => 'Arte na Educação',
        '4' => 'Direito Administrativo',
        '5' => 'Direito Aplicado à Educação',
        '6' => 'Direito do Consumidor',
        '7' => 'Direito do Trabalho',
        '8' => 'Direito Empresarial',
        '9' => 'Direito Imobiliario',
        '10' => 'Direito Penal',
        '11' => 'Direito Tributário',
        '12' => 'Docência de Ensino Superior',
        '13' => 'Educação Ambiental',
        '14' => 'Educação de Jovens e Adultos - EJA',
        '15' => 'Educação Especial e Inclusiva',
        '16' => 'Educação Infantil',
        '17' => 'Especialização em Apologética',
        '18' => 'Especialização em Cultura e Língua Hebraica',
        '19' => 'Especialização em Educação à Distância - EAD',
        '20' => 'Especialização em Educação Religiosa',
        '21' => 'Especialização em Empreendedorismo',
        '22' => 'Especialização em Estudos da Torá (Torah)',
        '23' => 'Especialização em Marketing',
        '24' => 'Especialização em Ministério Pastoral',
        '25' => 'Especialização em Missiologia',
        '26' => 'Especialização em Teologia Sistemática',
        '27' => 'Gestão Ambiental e Sustentabilidade',
        '28' => 'gestão Contábil',
        '29' => 'Gestão da Informação',
        '30' => 'Gestão de Finanças'], null, 'empty_value' => 'Selecione o curso'])
        ->add('nome_turma', 'text', ['attr' => ['class' => 'form-control field-input'], 'label' => 'Nome da Turma'])
        ->add('btn_salvar', 'submit', ['label' => 'Salvar'])
        ->add('btn_pesquisar', 'button', ['label' => 'Pesquisar']);

    }
}
