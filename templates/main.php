<?php
// Template source: https://github.com/kimitaka/atcoder-library

// ==================================================
// AtCoder PHP Template
// ==================================================

// --------------------------------------------------
// 【問題】
//   URL:
//   タイトル:
//
// 【概要】
//
//
// 【制約】
//
//
// 【入力形式】
//
//
// 【方針・メモ】
//
//
// 【計算量】
//
// --------------------------------------------------

// 高速化
error_reporting(0);

// --- 入力ヘルパー ---

/**
 * 1行読み込み（trim済み）
 */
function readline_trim(): string {
    return trim(fgets(STDIN));
}

/**
 * 1行から整数1つ
 */
function read_int(): int {
    return (int)readline_trim();
}

/**
 * 1行からスペース区切りで整数配列
 */
function read_ints(): array {
    return array_map('intval', explode(' ', readline_trim()));
}

/**
 * 1行からスペース区切りで文字列配列
 */
function read_strings(): array {
    return explode(' ', readline_trim());
}

/**
 * N行の整数を配列で読み込み
 */
function read_int_lines(int $n): array {
    $a = [];
    for ($i = 0; $i < $n; $i++) {
        $a[] = read_int();
    }
    return $a;
}

/**
 * N行のスペース区切り整数を2次元配列で読み込み
 */
function read_int_grid(int $n): array {
    $grid = [];
    for ($i = 0; $i < $n; $i++) {
        $grid[] = read_ints();
    }
    return $grid;
}

// --- ユーティリティ ---

/**
 * GCD（最大公約数）
 */
function gcd(int $a, int $b): int {
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return $a;
}

/**
 * LCM（最小公倍数）
 */
function lcm(int $a, int $b): int {
    return intdiv($a, gcd($a, $b)) * $b;
}

/**
 * 繰り返し二乗法 (a^n mod m)
 */
function mod_pow(int $a, int $n, int $m): int {
    $result = 1;
    $a %= $m;
    while ($n > 0) {
        if ($n & 1) {
            $result = $result * $a % $m;
        }
        $a = $a * $a % $m;
        $n >>= 1;
    }
    return $result;
}

/**
 * 出力バッファ（大量出力の高速化用）
 */
function output(array $lines): void {
    echo implode("\n", $lines) . "\n";
}

// --- 定数 ---
const MOD = 998244353;
const INF = PHP_INT_MAX;

// ==================================================
// メイン処理
// ==================================================

function solve(): void {
    // 入力例:
    // [$n, $m] = read_ints();
    // $a = read_ints();
    // $s = readline_trim();

    // ここに解法を書く

}

solve();

