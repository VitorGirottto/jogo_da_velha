<?php
$tabuleiro = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];

function exibirTabuleiro($tabuleiro) {
    echo "  0 1 2\n";
    foreach ($tabuleiro as $indiceLinha => $linha) {
        echo $indiceLinha . " " . implode('|', $linha) . "\n";
        if ($indiceLinha < 2) {
            echo "  -----\n";
        }
    }
}

function verificarVencedor($tabuleiro, $jogador) {
    foreach ($tabuleiro as $linha) {
        if (array_unique($linha) === [$jogador]) {
            return true;
        }
    }

    for ($coluna = 0; $coluna < 3; $coluna++) {
        if (
            $tabuleiro[0][$coluna] === $jogador &&
            $tabuleiro[1][$coluna] === $jogador &&
            $tabuleiro[2][$coluna] === $jogador
        ) {
            return true;
        }
    }

    if (
        ($tabuleiro[0][0] === $jogador && $tabuleiro[1][1] === $jogador && $tabuleiro[2][2] === $jogador) ||
        ($tabuleiro[0][2] === $jogador && $tabuleiro[1][1] === $jogador && $tabuleiro[2][0] === $jogador)
    ) {
        return true;
    }

    return false;
}

function verificarEmpate($tabuleiro) {
    foreach ($tabuleiro as $linha) {
        if (in_array(' ', $linha)) {
            return false;
        }
    }
    return true;
}

$jogadorAtual = 'X';
while (true) {
    exibirTabuleiro($tabuleiro);
    echo "Jogador $jogadorAtual, insira sua jogada (linha e coluna, ex: 0 1): ";
    $entrada = trim(fgets(STDIN));
    [$linha, $coluna] = explode(' ', $entrada);

    if (!isset($tabuleiro[$linha][$coluna]) || $tabuleiro[$linha][$coluna] !== ' ') {
        echo "Jogada inválida! Tente novamente.\n";
        continue;
    }

    $tabuleiro[$linha][$coluna] = $jogadorAtual;

    if (verificarVencedor($tabuleiro, $jogadorAtual)) {
        exibirTabuleiro($tabuleiro);
        echo "Parabéns, jogador $jogadorAtual! Você venceu!\n";
        break;
    }

    if (verificarEmpate($tabuleiro)) {
        exibirTabuleiro($tabuleiro);
        echo "Empate! O jogo terminou sem vencedores.\n";
        break;
    }

    $jogadorAtual = ($jogadorAtual === 'X') ? 'O' : 'X';
}
?>
