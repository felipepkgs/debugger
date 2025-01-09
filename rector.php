<?php

declare(strict_types = 1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withRules([
        \Rector\CodeQuality\Rector\If_\CombineIfRector::class,
        \Rector\CodeQuality\Rector\Class_\CompleteDynamicPropertiesRector::class,
        \Rector\CodeQuality\Rector\If_\ConsecutiveNullCompareReturnsToNullCoalesceQueueRector::class,
        \Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector::class,
        \Rector\CodeQuality\Rector\ClassMethod\ExplicitReturnNullRector::class,
        \Rector\CodeQuality\Rector\For_\ForRepeatedCountToOwnVariableRector::class,
        \Rector\CodeQuality\Rector\Concat\JoinStringConcatRector::class,
        \Rector\CodeQuality\Rector\Ternary\NumberCompareToMaxFuncCallRector::class,
        \Rector\CodeQuality\Rector\If_\ShortenElseIfRector::class,
        \Rector\CodeQuality\Rector\Identical\SimplifyConditionsRector::class,
        \Rector\CodeQuality\Rector\BooleanAnd\SimplifyEmptyArrayCheckRector::class,
        \Rector\CodeQuality\Rector\If_\SimplifyIfElseToTernaryRector::class,
        \Rector\CodeQuality\Rector\Ternary\UnnecessaryTernaryExpressionRector::class,
        \Rector\CodeQuality\Rector\Foreach_\UnusedForeachValueToArrayKeysRector::class,

        \Rector\CodingStyle\Rector\Foreach_\MultiDimensionalArrayToArrayDestructRector::class,
        \Rector\CodingStyle\Rector\Encapsed\WrapEncapsedVariableInCurlyBracesRector::class,
        \Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector::class,

        \Rector\DeadCode\Rector\Cast\RecastingRemovalRector::class,
        \Rector\DeadCode\Rector\ClassMethod\RemoveEmptyClassMethodRector::class,
        \Rector\DeadCode\Rector\PropertyProperty\RemoveNullPropertyInitializationRector::class,
        \Rector\DeadCode\Rector\Stmt\RemoveUnreachableStatementRector::class,
        \Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector::class,
        \Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class,
        \Rector\DeadCode\Rector\Property\RemoveUselessVarTagRector::class,

        \Rector\EarlyReturn\Rector\If_\ChangeIfElseValueAssignToEarlyReturnRector::class,
        \Rector\EarlyReturn\Rector\If_\ChangeNestedIfsToEarlyReturnRector::class,
        \Rector\EarlyReturn\Rector\Return_\PreparedValueToEarlyReturnRector::class,
        \Rector\EarlyReturn\Rector\If_\RemoveAlwaysElseRector::class,

        \Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector::class,

        \Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeFromPropertyTypeRector::class,
    ])
    ->withPhpSets();