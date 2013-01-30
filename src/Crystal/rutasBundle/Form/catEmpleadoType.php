<?php
namespace Crystal\rutasBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
class catEmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigo')
                ->add('nombre')
                ->add('apellido')
                ->add('nombreSeguro')
                ->add('nombreNit')
                ->add('dui')
                ->add('fechaExpedicion')
                ->add('lugarExpedicion')
                ->add('nit')
                ->add('isss')
                ->add('causaBaja')
                ->add('formaPago')
                ->add('salario')
                ->add('salarioDiario')
                ->add('direccion')
                ->add('depto')
                ->add('municipio')
                ->add('banco')
                ->add('cuentaBanco')
                ->add('fechaNacimiento')
                ->add('lugarNacimiento')
                ->add('tipoEmpleado')
                ->add('nombrePadre')
                ->add('nombreMadre')
                ->add('puesto')
                ->add('sexo')
                ->add('afp')
                ->add('numAfp')
                ->add('email')
                ->add('foto')
                ->add('observaciones')
                ->add('numContrato')
                ->add('bajoContrato')
                ->add('estado')
                ->add('estadoCivil')
                ->add('turno');
    }
    public function getName()
    {
        return 'article_form';
    }
}
?>