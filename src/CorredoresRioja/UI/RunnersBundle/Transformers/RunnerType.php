<?php

namespace CorredoresRioja\UI\RunnersBundle\Transformers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use CorredoresRioja\UI\RunnersBundle\Transformers\SignupRunnerTransformer;

class RunnerType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('dni')
                ->add('name')
                ->add('lastname')
                ->add('email')
                // Pedimos confirmación de la contraseña
                ->add('password', 'repeated', array('type' => 'password',
                    'invalid_message' => 'La contraseña debe ser la misma',
                    'options' => array('label' => 'Contraseña: ')))
                // El tipo de fechanacimiento debe ser birthday de lo contrario sólo muestra
                // fechas hasta el año 2000.
                ->add('birthdate', 'birthday', array('label' => 'Fecha de nacimiento: '))
                ->add('address', 'textarea', array('label' => 'Dirección: '))
                // Por último añadimos el botón de envío.
                ->add('registro', 'submit', array('label' => 'Registro'));
        
        $builder->addViewTransformer(new SignupRunnerTransformer());
    }
    
    public function getName() {
        return 'runner';
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CorredoresRioja\UI\RunnersBundle\ViewModels\SignupRunnerViewModel',
            'error_mapping' => 
                array('passwordLegal' => 'password',
                'adul' => 'birthdate')
        ));
    }
}
