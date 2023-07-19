<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'article.title.label',
                'required' => true,
                'sanitize_html' => true,
                'attr' => [
                    'placeholder' => 'article.title.placeholder',
                ]
            ])
            ->add('metaTitle', TextType::class, [
                'label' => 'article.metaTitle.label',
                'required' => true,
                'sanitize_html' => true,
                'attr' => [
                    'placeholder' => 'article.metaTitle.placeholder'
                ]
            ])
            ->add('metaDescription', TextType::class, [
                'label' => 'article.metaDesc.label',
                'required' => true,
                'sanitize_html' => true,
                'attr' => [
                    'placeholder' => 'article.metaDesc.placeholder'

                ]
            ])
            ->add('content', TextareaType::class, [
                'label' => 'article.content.label',
                'required' => true,
                'sanitize_html' => true,
                'attr' => [
                    'placeholder' => 'article.content.placeholder',
                    'rows' => 5,
                ]
            ])
            ->add('enable', CheckboxType::class, [
                'label' => 'article.enable.label',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'translation_domain' => 'form'
        ]);
    }
}
