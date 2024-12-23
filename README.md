# Jogo da Velha em PHP

## Visão Geral

Este projeto implementa um jogo da velha (tic-tac-toe) em PHP que pode ser jogado diretamente no terminal. Dois jogadores alternam turnos para marcar suas jogadas no tabuleiro, tentando completar uma linha, coluna ou diagonal com o mesmo símbolo (X ou O). O jogo detecta automaticamente vitórias ou empates.

## Funcionalidades Principais

- **Tabuleiro Dinâmico**: O tabuleiro é exibido em cada turno, mostrando as jogadas feitas.
- **Validação de Jogadas**: Garantia de que as jogadas sejam válidas (dentro do tabuleiro e em células vazias).
- **Detecção de Vitória e Empate**: O jogo verifica automaticamente se há um vencedor ou se o tabuleiro está cheio.

## Requisitos

- **PHP**: Versão 7.x ou superior.
- **Ambiente CLI**: O jogo é interativo e precisa ser executado em um terminal.

## Como Jogar

1. Execute o código PHP no terminal.
2. Os jogadores alternam turnos inserindo as coordenadas (linha e coluna) do tabuleiro onde desejam jogar.
3. O jogo termina quando um jogador vence ou quando todas as células do tabuleiro estão preenchidas (empate).

### Entrada do Usuário

- **Formato de Entrada**: O jogador insere sua jogada no formato `linha coluna` (exemplo: `0 1`).
- **Coordenadas Válidas**: As coordenadas devem estar dentro do intervalo [0, 2] e a célula escolhida deve estar vazia.

### Regras de Vitória

Um jogador vence se completar uma linha, coluna ou diagonal com o mesmo símbolo (`X` ou `O`).

### Regras de Empate

O jogo termina em empate se todas as células do tabuleiro forem preenchidas sem que nenhum jogador complete uma linha, coluna ou diagonal.

## Fluxo de Jogo

1. **Exibição do Tabuleiro**: O tabuleiro atual é exibido no início de cada turno.
2. **Entrada do Jogador**: O jogador atual insere as coordenadas da jogada.
3. **Validação**: O sistema valida a jogada. Se inválida, o jogador deve inserir novamente.
4. **Verificação de Vitória ou Empate**:
   - Se um jogador completar uma linha, coluna ou diagonal, ele vence.
   - Se todas as células estiverem preenchidas sem vitória, o jogo termina em empate.
5. **Alternância de Jogadores**: Caso nenhuma das condições acima seja atendida, o próximo jogador realiza sua jogada.

## Como Executar

1. Salve o código em um arquivo chamado `jogo_da_velha.php`.
2. Execute o arquivo no terminal com o comando:
`php jogo_da_velha.php`
3. Siga as instruções exibidas no terminal para jogar.

OU 

1. Acesse o link https://onlinegdb.com/JuW_bpA2r e execute por la o código.

Divirta-se jogando! 🎮
