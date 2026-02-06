<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bon de Commande #{{ $order->id }}</title>
    <style>
        @page {
            margin: 0;
            size: 80mm auto;
        }
        body {
            font-family: 'Courier New', monospace;
            margin: 0;
            padding: 10mm 5mm;
            font-size: 12px;
            width: 70mm;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
            border-bottom: 2px dashed #000;
            padding-bottom: 10px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .company-info {
            font-size: 10px;
            line-height: 1.4;
        }
        .section {
            margin-bottom: 15px;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        .info-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
            font-size: 11px;
        }
        .info-label {
            font-weight: bold;
        }
        .divider {
            border-top: 1px dashed #000;
            margin: 10px 0;
        }
        .total-section {
            margin-top: 15px;
            border-top: 2px solid #000;
            padding-top: 10px;
        }
        .total-line {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }
        .status {
            text-align: center;
            margin: 15px 0;
            padding: 8px;
            border: 2px solid #000;
            font-weight: bold;
            text-transform: uppercase;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
            border-top: 2px dashed #000;
            padding-top: 10px;
        }
        .barcode {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">BUSIDIG</div>
        <div class="company-info">
            Branding & Packaging Professionnel<br>
            Email: busidigmark@gmail.com<br>
            Tel: +228 92 94 36 17<br>
            Lomé, Togo
        </div>
    </div>

    <div class="barcode">
        *{{ str_pad($order->id, 8, '0', STR_PAD_LEFT) }}*
    </div>

    <div class="section">
        <div class="section-title">Informations Commande</div>
        <div class="info-line">
            <span class="info-label">N° Commande:</span>
            <span>#{{ $order->id }}</span>
        </div>
        <div class="info-line">
            <span class="info-label">Date:</span>
            <span>{{ $order->created_at->format('d/m/Y H:i') }}</span>
        </div>
        <div class="info-line">
            <span class="info-label">Statut:</span>
            <span>
                @if($order->status === 'pending') En attente
                @elseif($order->status === 'in_progress') En cours
                @elseif($order->status === 'delivered') Livré
                @else Annulé
                @endif
            </span>
        </div>
    </div>

    <div class="divider"></div>

    <div class="section">
        <div class="section-title">Informations Client</div>
        <div class="info-line">
            <span class="info-label">Entreprise:</span>
            <span>{{ $order->client->company_name }}</span>
        </div>
        <div class="info-line">
            <span class="info-label">Contact:</span>
            <span>{{ $order->client->contact_name }}</span>
        </div>
        <div class="info-line">
            <span class="info-label">Téléphone:</span>
            <span>{{ $order->client->phone }}</span>
        </div>
        <div class="info-line">
            <span class="info-label">Email:</span>
            <span>{{ $order->client->email }}</span>
        </div>
    </div>

    <div class="divider"></div>

    <div class="section">
        <div class="section-title">Détails Commande</div>
        <div class="info-line">
            <span class="info-label">Service:</span>
        </div>
        <div style="margin-left: 10px; margin-bottom: 5px; font-weight: bold;">
            {{ $order->service->name }}
        </div>
        <div class="info-line">
            <span class="info-label">Catégorie:</span>
            <span>{{ ucfirst($order->service->category) }}</span>
        </div>
        <div class="info-line">
            <span class="info-label">Quantité:</span>
            <span>{{ $order->quantity }} unités</span>
        </div>
        <div class="info-line">
            <span class="info-label">Prix unitaire:</span>
            <span>{{ number_format($order->service->base_price, 2) }}€</span>
        </div>
        @if($order->specifications)
            <div style="margin-top: 8px;">
                <div class="info-label">Spécifications:</div>
                <div style="margin-left: 10px; margin-top: 3px; font-size: 10px;">
                    {{ $order->specifications }}
                </div>
            </div>
        @endif
    </div>

    <div class="total-section">
        <div class="total-line">
            <span>TOTAL À PAYER:</span>
            <span>{{ number_format($order->total_price, 2) }}€</span>
        </div>
    </div>

    @if($order->delivery_date)
    <div class="info-line" style="margin-top: 10px;">
        <span class="info-label">Date de livraison prévue:</span>
        <span>{{ \Carbon\Carbon::parse($order->delivery_date)->format('d/m/Y') }}</span>
    </div>
    @endif

    <div class="status">
        @if($order->status === 'pending')
            ⏳ EN ATTENTE DE CONFIRMATION
        @elseif($order->status === 'in_progress')
            🔄 EN PRODUCTION
        @elseif($order->status === 'delivered')
            ✅ COMMANDE LIVRÉE
        @else
            ❌ COMMANDE ANNULÉE
        @endif
    </div>

    <div class="footer">
        Merci pour votre confiance!<br>
        Pour toute question, contactez-nous:<br>
        WhatsApp: +228 92 94 36 17<br>
        <br>
        <strong>www.busidig.com</strong><br>
        <br>
        Document généré le {{ now()->format('d/m/Y à H:i') }}
    </div>
</body>
</html>
