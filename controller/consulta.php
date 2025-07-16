<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['cpf'] ?? '';
    
    // Simula consulta de CPF (você pode integrar com API real aqui)
    $dadosPorCPF = [
        '22950309003' => [
            'NOME' => 'João Silva Santos',
            'CPF' => '22950309003'
        ],
        '12345678901' => [
            'NOME' => 'Maria Oliveira Costa',
            'CPF' => '12345678901'
        ],
        '98765432100' => [
            'NOME' => 'Pedro Ferreira Lima',
            'CPF' => '98765432100'
        ],
        '11122233344' => [
            'NOME' => 'Ana Rodrigues Silva',
            'CPF' => '11122233344'
        ],
        '55566677788' => [
            'NOME' => 'Carlos Alves Martins',
            'CPF' => '55566677788'
        ]
    ];
    
    if (isset($dadosPorCPF[$cpf])) {
        echo json_encode([
            'success' => true,
            'data' => $dadosPorCPF[$cpf]
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'CPF não encontrado'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Método não permitido'
    ]);
}
?> 