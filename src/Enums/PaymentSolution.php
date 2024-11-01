<?php

namespace Upgradelabs\Reduniq\Enums;

enum PaymentSolution: int
{
    case CARTAO_DE_CREDITO_DPG = 106;
    case MB_WAY_DPG = 107;
    case PAGAMENTO_DE_SERVICOS_MB_DPG = 108;
    case CARTAO_DE_CREDITO_SPG = 109;
    case MB_WAY_SPG = 110;
    case CARTAO_DE_CREDITO_CYBERSOURCE = 113;
    case GOOGLE_PAY_CYBERSOURCE = 114;
    case APPLE_PAY_CYBERSOURCE = 115;

}

/*100 - REDUNIQ E-Commerce
101 - PayPal (SOAP)
102 - AMEX (3C iPage)
105 - PayPal (REST)
106 - Cartão de crédito (DPG)
107 - MB WAY (DPG)
108 - Pagamento de Serviços/MB
(DPG)
109 - Cartão de crédito (SPG)
110 - MB WAY (SPG)
111 - Pagamento de Serviços/MB
(SPG)
112 – Parcela Já
113 – Cartão de crédito
(Cybersource)
114 – Google Pay (Cybersource)
115 – Apple Pay (Cybersource)
116 – PIX (Braza)
*/
