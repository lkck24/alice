<?php

declare(strict_types=1);

return [
    'dependencies' => [
        'aliases' => [
            'nelmio_alice.fixture_builder' => 'nelmio_alice.fixture_builder.simple',

            'nelmio_alice.fixture_builder.denormalizer' => 'nelmio_alice.fixture_builder.denormalizer.simple',
            'nelmio_alice.fixture_builder.denormalizer.fixture' => 'nelmio_alice.fixture_builder.denormalizer.fixture.tolerant_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture_bag' => 'nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser' => 'nelmio_alice.fixture_builder.denormalizer.flag_parser.element',
            'nelmio_alice.fixture_builder.denormalizer.parameter_bag' => 'nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.specs' => 'nelmio_alice.fixture_builder.denormalizer.specs.simple',

            'nelmio_alice.fixture_builder.expression_language.parser' => 'nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser',
            'nelmio_alice.fixture_builder.expression_language.lexer' => 'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser' => 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry',
        ],
        'factories' => [
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\NullListNameDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\NullRangeNameDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.reference_range_name' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\ReferenceRangeNameDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizerWithListFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizerWithRangeFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixtureWithListFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixtureWithRangeFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SimpleFixtureBagDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Arguments\SimpleArgumentsDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\ConfiguratorFlagHandlerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\OptionalFlagHandlerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\LegacyConstructorDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\ConstructorDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\FactoryDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Property\SimpleDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\SimpleValueDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.tolerant_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\TolerantFixtureDenormalizerFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistryFactory::class,

            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParserFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\Chainable\ExtendFlagParserFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParserFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\Chainable\TemplateFlagParserFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\Chainable\UniqueFlagParserFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.element' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParserFactory::class,
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.registry' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\FlagParser\FlagParserRegistryFactory::class,

            'nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Parameter\SimpleParameterBagDenormalizerFactory::class,

            'nelmio_alice.fixture_builder.denormalizer.specs.simple' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\SimpleSpecificationsDenormalizerFactory::class,

            'nelmio_alice.fixture_builder.denormalizer.simple' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\Denormalizer\SimpleDenormalizerFactory::class,

            'nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\FunctionFixtureReferenceParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.simple_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\SimpleParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.string_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\StringMergerParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\GlobalsPatternsLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.function_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\FunctionLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.string_then_reference_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\StringThenReferenceLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\SubPatternsLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceLexerFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\TokenParserRegistryFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\DynamicArrayTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\EscapedValueTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureListReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureMethodReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureRangeReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\MethodReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\OptionalTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ParameterTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\PropertyReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\SimpleReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringArrayTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\TolerantFunctionTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\WildcardReferenceTokemParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaperFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\IdentityTokenParserFactory::class,
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FunctionTokenParserFactory::class,

            'nelmio_alice.fixture_builder.simple' => \Nelmio\Alice\Bridge\Laminas\FixtureBuilder\SimpleBuilderFactory::class,
        ],
    ],
];
