<?php

declare(strict_types=1);

/*
 * This file is part of the solrphp playground.
 * (c) wicliff <wicliff.wolda@gmail.com>
 */

namespace Solrphp\Playground\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * RequestType.
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class RequestType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('requests', IntegerType::class, [
                'label' => false,
            ])
        ;
    }
}
