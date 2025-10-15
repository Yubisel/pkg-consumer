<?php

namespace Pkg\Configurations\Enums;

use Illuminate\Support\Facades\Log;
use Pkg\Configurations\Configurations;
use Pkg\Wallet\Enums\Actions;

/**
 * Class Providers
 *
 * This class allows to define static providers
 *
 * @package Pkg\Configurations\Enums
 * @author  Eborio Linarez
 * @author  Gabriel Santiago
 * @author  Miguel Sira
 */
class Providers
{
    /**
     * Pkg
     *
     * @var int
     */
    public static $dotworkers = 1;

    /**
     * SportBook
     *
     * @var int
     */
    public static $sportbook = 2;

    /**
     * Center Horses
     *
     * @var int
     */
    public static $center_horses = 3;

    /**
     * OCB Slots
     *
     * @var int
     */
    public static $ocb_slots = 4;

    /**
     * BetPay
     *
     * @var int
     */
    public static $betpay = 5;

    /**
     * Credit codes
     *
     * @var int
     */
    public static $credit_codes = 6;

    /**
     * Wire transfers
     *
     * @var int
     */
    public static $wire_transfers = 7;

    /**
     * TV Bet
     *
     * @var int
     */
    public static $tv_bet = 8;

    /**
     * Ezugi
     *
     * @var int
     */
    public static $ezugi = 9;

    /**
     * VivoGaming
     *
     * @var int
     */
    public static $vivo_gaming = 10;

    /**
     * DLV
     *
     * @var int
     */
    public static $dlv = 11;

    /**
     * Andes SportBook
     *
     * @var int
     */
    public static $andes_sportbook = 12;

    /**
     * WNet Games
     *
     * @var int
     */
    public static $wnet_games = 13;

    /**
     * JustPay
     *
     * @var int
     */
    public static $just_pay = 14;

    /**
     * Lucky Spins
     *
     * @var int
     */
    public static $lucky_spins = 15;

    /**
     * Agents
     *
     * @var int
     */
    public static $agents = 16;

    /**
     * Salsa Gaming
     *
     * @var int
     */
    public static $salsa_gaming = 17;
    /**
     * Caleta Gaming
     *
     * @var int
     */
    public static $caleta_gaming = 18;
    /**
     * Sisvenprol
     *
     * @var int
     */
    public static $sisvenprol = 19;

    /**
     * XLive
     *
     * @var int
     */
    public static $xlive = 20;

    /**
     * Zelle
     *
     * @var int
     */
    public static $zelle = 21;

    /**
     * Bonus
     *
     * @var int
     */
    public static $bonus = 22;

    /**
     * Golden Race
     *
     * @var int
     */
    public static $golden_race = 23;

    /**
     * Manual adjustments
     *
     * @var int
     */
    public static $manual_adjustments = 24;

    /**
     * Agents users
     *
     * @var int
     */
    public static $agents_users = 25;

    /**
     * IQ Soft
     *
     * @var int
     */
    public static $iq_soft = 26;

    /**
     * Jackpot
     *
     * @var int
     */
    public static $lega_jackpot = 27;

    /**
     * Virtual Generation
     *
     * @var int
     */
    public static $virtual_generation = 28;

    /**
     * Mobile payment
     *
     * @var int
     */
    public static $mobile_payment = 29;

    /**
     * PayPal
     *
     * @var int
     */
    public static $paypal = 30;

    /**
     * Skrill
     *
     * @var int
     */
    public static $skrill = 31;

    /**
     * Neteller
     *
     * @var int
     */
    public static $neteller = 32;

    /**
     * Cryptocurrencies
     *
     * @var int
     */
    public static $cryptocurrencies = 33;

    /**
     * AirTm
     *
     * @var int
     */
    public static $airtm = 34;

    /**
     * Uphold
     *
     * @var int
     */
    public static $uphold = 35;

    /**
     * Apcopay
     *
     * @var int
     */
    public static $apcopay = 36;

    /**
     * Yeipii
     *
     * @var int
     */
    public static $yeipii = 37;

    /**
     * 123Pago
     *
     * @var int
     */
    public static $pago_123 = 38;

    /**
     * Agency
     *
     * @var int
     */
    public static $agency = 39;

    /**
     * Zippy
     *
     * @var int
     */
    public static $zippy = 40;

    /**
     * El Inmejorable
     *
     * @var int
     */
    public static $inmejorable = 41;

    /**
     * Pragmatic Play
     *
     * @var int
     */

    public static $pragmatic_play = 42;

    /**
     * Play Son
     *
     * @var int
     */
    public static $play_son = 43;

    /**
     * KaGaming
     *
     * @var int
     */
    public static $ka_gaming = 44;

    /**
     * PayCIPS
     *
     * @var int
     */

    public static $paycips = 45;

    /**
     * Gamzix
     *
     * @var int
     */

    public static $gamzix = 46;

    /**
     * VirtuaLoto Live Solutions
     *
     * @var int
     */
    public static $vls = 47;

    /**
     * Patagonia
     *
     * @var int
     */
    public static $patagonia = 48;

    /**
     * PG Soft
     *
     * @var int
     */
    public static $pg_soft = 49;

    /**
     * Booongo
     *
     * @var int
     */
    public static $booongo = 50;

    /**
     * GameArt
     *
     * @var int
     */
    public static $game_art = 51;

    /**
     * Booming Games
     *
     * @var int
     */
    public static $booming_games = 52;

    /**
     * Kiron Interactive
     *
     * @var int
     */
    public static $kiron_interactive = 53;

    /**
     * Hacksaw Gaming
     *
     * @var int
     */
    public static $hacksaw_gaming = 54;

    /**
     * Triple Cherry
     *
     * @var int
     */
    public static $triple_cherry = 55;

    /**
     * Expresso Games
     *
     * @var int
     */
    public static $espresso_games = 56;

    /**
     * Spinmatic
     *
     * @var int
     */
    public static $spinmatic = 57;

    /**
     * Color Spin
     *
     * @var int
     */
    public static $color_spin = 58;

    /**
     * Total Pago
     *
     * @var int
     */
    public static $total_pago = 59;

    /**
     * Mascot
     *
     * @var int
     */
    public static $mascot_gaming = 60;

    /**
     * Store
     *
     * @var int
     */
    public static $store = 61;

    /**
     * Event Bet
     *
     * @var int
     */
    public static $event_bet = 62;

    /**
     * Spin Deluxe
     *
     * @var int
     */
    public static $spin_deluxe = 63;

    /**
     * Monnet
     *
     * @var int
     */
    public static $monnet = 64;

    /**
     * Branka
     *
     * @var int
     */
    public static $branka = 65;

    /**
     * Oobit
     *
     * @var int
     */
    public static $oobit = 66;

    /**
     * Oobit
     *
     * @var int
     */
    public static $animals_deluxe = 67;

    /**
     * Branka Originals
     *
     * @var int
     */
    public static $branka_originals = 68;

    /**
     * VCreditos
     *
     * @var int
     */
    public static $vcreditos = 69;

    /**
     * Evolution
     *
     * @var int
     */
    public static $evolution = 70;

    /**
     * Mohio
     *
     * @var int
     */
    public static $mohio = 71;

    /**
     * Dot Live
     *
     * @var int
     */
    public static $dot_live = 72;

    /**
     * Wazdan
     *
     * @var int
     */
    public static $wazdan = 73;

    /**
     * Triple Cherry
     *
     * @var int
     */
    public static $triple_cherry_original = 74;

    /**
     * Belatra
     *
     * @var int
     */
    public static $belatra = 75;

    /**
     * PragmaticPlay Live Casino
     *
     * @var int
     */
    public static $pragmatic_play_live_casino = 76;

    /**
     * Booongo original
     *
     * @var int
     */
    public static $booongo_original = 77;

    /**
     * Mancalagaming
     *
     * @var int
     */
    public static $mancala_gaming = 78;

    /**
     * VES to USD
     *
     * @var int
     */
    public static $ves_to_usd = 79;

    /**
     * SW3
     *
     * @var int
     */
    public static $sw3 = 80;

    /**
     * Red Rake
     *
     * @var int
     */
    public static $red_rake = 81;

    /**
     * Uinversal Soft
     *
     * @var int
     */
    public static $universal_soft = 82;

    /**
     * Play N Go
     *
     * @var int
     */
    public static $play_n_go = 83;

    /**
     * Altenar
     *
     * @var int
     */
    public static $altenar = 84;

    /**
     * Evo Play
     *
     * @var int
     */
    public static $evo_play = 85;

    /**
     * Slot Machine Provider
     *
     * @var int
     */
    public static $endorphina = 86;

    /**
     * iSoftBet
     *
     * @var int
     */
    public static $i_soft_bet = 87;

    /**
     * Slot Machine Provider
     *
     * @var int
     */
    public static $pari_play = 88;

    /**
     * Kalamba
     *
     * @var int
     */
    public static $kalamba = 89;

    /**
     * Payment P4F
     *
     * @var int
     */
    public static $pay_for_fun = 90;

    /**
     *  Telegram
     *
     * @var int
     */
    public static $telegram = 91;

    /**
     *  VPOS
     *
     * @var int
     */
    public static $vpos = 92;

    /**
     *  LivePlayer = SportBook
     *
     * @var int
     */
    public static $live_player = 93;

    /**
     *  VCreditos API
     *
     * @var int
     */
    public static $vcreditos_api = 94;

    /**
     *  Abitab
     *
     * @var int
     */
    public static $abitab = 95;

    /**
     *  Red Pagos
     *
     * @var int
     */
    public static $red_pagos = 96;

    /**
     *  Directa24
     *
     * @var int
     */
    public static $directa24 = 97;

    /**
     *  Pay Retailers
     *
     * @var int
     */
    public static $pay_retailers = 98;

    /**
     * Urgent Games
     *
     * @var int
     */
    public static $urgent_games = 99;

    /**
     * Ortiz Gaming
     *
     * @var int
     */
    public static $ortiz_gaming = 100;

    /**
     * Adams Pay
     *
     * @var int
     */
    public static $adams_pay = 101;

    /**
     * Vibra
     *
     * @var int
     */
    public static $vibra = 102;

    /**
     * FBM Gaming
     *
     * @var int
     */
    public static $fbm_gaming = 103;

    /**
     * Evolution slots
     *
     * @var int
     */
    public static $evolution_slots = 104;

    /**
     * One Touch
     *
     * @var int
     */
    public static $one_touch = 105;

    /**
     * Vpos Zimple
     *
     * @var int
     */
    public static $zimple = 106;

    /**
     * Slot Provider: GreenTube
     *
     * @var int
     */
    public static $greentube = 107;

    /**
     * Sportbook Provider
     *
     * @var int
     */
    public static $veneto_sportbook = 108;

    /**
     * Platipus
     *
     * @var int
     */
    public static $platipus = 109;

    /**
     * BetConnections Sportbook Versus
     *
     * @var int
     */
    public static $bc_versus = 110;

    /**
     * Smart Soft
     *
     * @var int
     */
    public static $smart_soft = 111;

    /**
     * Swintt
     *
     * @var int
     */
    public static $swintt = 112;

    /**
     * Slot Provider
     *
     * @var int
     */
    public static $sky_wind = 113;


    /**
     * RGS Gaming Provider
     *
     * @var int
     */
    public static $rgs_gaming = 114;

    /**
     * Dot Suite Provider
     *
     * @var int
     */
    public static $dot_suite = 115;

    /**
     * Coral Commerce Provider
     *
     * @var int
     */
    public static $coral_commerce = 116;

    /**
     * Fantasy Provider
     *
     * @var int
     */
    public static $fantasy = 117;

    /**
     * Booming Games Origin Provider
     *
     * @var int
     */
    public static $booming_games_origin = 118;

    /**
     * DLS Provider
     *
     * @var int
     */
    public static $dls = 119;

    /**
     * PragmaticPlay Virtual Provider
     *
     * @var int
     */
    public static $pragmatic_play_virtual = 120;

    /**
     * Net Ent
     *
     * @var int
     */
    public static $net_ent = 121;

    /**
     * Skillzz Gaming
     *
     * @var int
     */
    public static $skillzz_gaming = 122;

    /**
     * Dragon Gaming
     *
     * @var int
     */
    public static $dragon_gaming = 123;

    /**
     * Eurasian Gaming
     *
     * @var int
     */
    public static $eurasian_gaming = 124;

    /**
     * Betsoft
     *
     * @var int
     */
    public static $betsoft = 125;

    /**
     * Tangente
     *
     * @var int
     */
    public static $tangente = 126;

    /**
     * Bet By
     *
     * @var int
     */
    public static $betby = 127;

    /**
     * Fresh Deck
     *
     * @var int
     */
    public static $fresh_deck = 128;

    /**
     * Ainsworth
     *
     * @var int
     */
    public static $ainsworth = 129;

    /**
     * Plexasoft
     *
     * @var int
     */
    public static $plexasoft = 130;

    /**
     * Store Money
     *
     * @var int
     */
    public static $store_money = 131;

    /**
     * Ruby Play
     *
     * @var int
     */
    public static $ruby_play = 132;

    /**
     * Ezugi Games
     *
     * @var int
     */
    public static $ezugi_games = 133;

    /**
     * Betsoft VG
     *
     * @var int
     */
    public static $betsoft_vg = 134;

    /**
     * Tom Horn VG
     *
     * @var int
     */
    public static $tom_horn_vg = 135;

    /**
     * Platipus VG
     *
     * @var int
     */
    public static $platipus_vg = 136;

    /**
     * Booongo VG
     *
     * @var int
     */
    public static $booongo_vg = 137;

    /**
     * Playson VG
     *
     * @var int
     */
    public static $playson_vg = 138;

    /**
     * Leap VG
     *
     * @var int
     */
    public static $leap_vg = 139;

    /**
     * Arrows Edge VG
     *
     * @var int
     */
    public static $arrows_edge_vg = 140;

    /**
     * Red Rake VG
     *
     * @var int
     */
    public static $red_rake_vg = 141;

    /**
     * Geek Bet
     *
     * @var int
     */
    public static $geet_bet = 142;

    /**
     * Beter
     *
     * @var int
     */
    public static $beter = 143;

    /**
     * Charging point
     *
     * @var int
     */
    public static $charging_point = 144;

    /**
     * Binance
     *
     * @var int
     */
    public static $binance = 145;

    /**
     * Bizum
     *
     * @var int
     */
    public static $bizum = 146;

    /**
     * Payku
     *
     * @var int
     */
    public static $payku = 147;

    /**
     * Vivo Gaming Bingo
     *
     * @var int
     */
    public static $vivo_gaming_bingo = 148;

    /**
     * Barbara Bang
     *
     * @var int
     */
    public static $barbara_bang = 149;

    /**
     * ProntoPaga
     *
     * @var int
     */
    public static $pronto_paga = 150;

    /**
     * Digitain
     *
     * @var int
     */
    public static $digitain = 151;

    /**
     * Bgaming
     *
     * @var int
     */
    public static $bgaming = 152;

    /**
     * Pay For Fun Go
     *
     * @var int
     */
    public static $pay_for_fun_go = 153;

    /**
     * Personal
     *
     * @var int
     */
    public static $personal = 154;

    /**
     * Reserve
     *
     * @var int
     */
    public static $reserve = 155;

    /**
     * 5Men Gaming
     *
     * @var int
     */
    public static $five_men_gaming = 156;

    /**
     * TGG Interactive
     *
     * @var int
     */
    public static $tgg_interactive = 157;

    /**
     * ZamPay
     *
     * @var int
     */
    public static $zampay = 158;

    /**
     * Nequi
     *
     * @var int
     */
    public static $nequi = 159;

    /**
     * Cockfight
     *
     * @var int
     */
    public static $cockfight = 160;

    /**
     * Beter live casino
     *
     * @var int
     */
    public static $beter_live_casino = 161;

    /**
     * Inbet
     *
     * @var int
     */
    public static $inbet = 162;

    /**
     * Spinomenal VG
     *
     * @var int
     */
    public static $spinomenal_vg = 163;

    /**
     * 5Men VG
     *
     * @var int
     */
    public static $five_men_vg = 164;

    /**
     * Pagomedios
     *
     * @var int
     */
    public static $pago_medios = 165;

    /**
     * Paguelofacil
     *
     * @var int
     */
    public static $paguelo_facil = 166;

    /**
     * Pagsmile
     *
     * @var int
     */
    public static $pagsmile = 167;

    /**
     * MercadoPago
     *
     * @var int
     */
    public static $mercado_pago = 168;

    /**
     * MercadoPago
     *
     * @var int
     */
    public static $jeyweb = 169;

    /**
     * Primepag
     *
     * @var int
     */
    public static $primepag = 170;

    /**
     * Niubiz
     *
     * @var int
     */
    public static $niubiz = 171;

    /**
     * IsoftBet copy
     *
     * @var int
     */
    public static $i_soft_bet_copies = 172;

    /**
     * Red Tiger Copy
     *
     * @var int
     */
    public static $red_tiger_copies = 173;

    /**
     * Nulink
     *
     * @var int
     */
    public static $nulink = 174;

    /**
     * Spribe | Salsa Gaming
     *
     * @var int
     */
    public static $spribe = 175;

    /**
     * CuponStar | Bonus Transactions | coupons
     *
     * @var int
     */
    public static $cupon_star = 176;

    /**
     * Air Dice | Slots
     *
     * @var int
     */
    public static $air_dice = 177;

    /**
     * Feenicia
     *
     * @var int
     */
    public static $feenicia = 178;

    /**
     * NetGaming
     *
     * @var int
     */
    public static $net_gaming = 179;

    /**
     * 4On
     *
     * @var int
     */
    public static $four_on = 180;

    /**
     * Dinelco
     *
     * @var int
     */
    public static $dinelco = 181;

    /**
     * Pagopar
     *
     * @var int
     */
    public static $pagopar = 182;

    /**
     * Binance Inswitch
     *
     * @var int
     */
    public static $binance_inswitch = 183;

    /**
     * PIX Inswitch
     * @var int
     */
    public static $pix_inswitch = 184;

    /**
     * Inswitch
     *
     * @var int
     */
    public static $inswitch = 185;

    /**
     * BTI
     *
     * @var int
     */
    public static $bti = 186;

    /**
     * Tigo money
     *
     * @var int
     */
    public static $tigo = 187;

    /**
     * Wally
     *
     * @var int
     */
    public static $wally = 188;

    /**
     * Claro
     *
     * @var int
     */
    public static $claro = 189;

    /**
     * Yggdrasil
     *
     * @var int
     */
    public static $yggdrasil = 190;

    /**
     * High 5 Games
     *
     * @var int
     */
    public static $high_5_games = 191;

    /**
     * 7 Mojos
     *
     * @var int
     */
    public static $mojos_7 = 192;

    /**
     * Zitro
     *
     * @var int
     */
    public static $zitro = 193;

    /**
     * Amigo Gaming
     *
     * @var int
     */
    public static $amigo_gaming = 194;

    /**
     * Bancard with QR
     *
     * @var int
     */
    public static $vpos_qr = 195;

    /**
     * 1x2 Gaming
     *
     * @var int
     */
    public static $gaming_1x2 = 196;

    /**
     * Amusnet/EGT games
     *
     * @var int
     */
    public static $amusnet_egt = 197;

    /**
     * Aviatrix
     *
     * @var int
     */
    public static $aviatrix = 198;

    /**
     * CT Interactive
     *
     * @var int
     */
    public static $ct_interactive = 199;

    /**
     * Mobadoo
     *
     * @var int
     */
    public static $mobadoo = 200;

    /**
     * Habanero
     *
     * @var int
     */
    public static $habanero = 201;

    /**
     * Wild Gaming
     *
     * @var int
     */
    public static $wild_gaming = 202;

    /**
     * SprintGaming
     *
     * @var int
     */
    public static $sprint_gaming = 203;

    /**
     * Aristocrat
     *
     * @var int
     */
    public static $aristocrat = 204;

    /**
     * Creedroomz
     *
     * @var int
     */
    public static $creedroomz = 205;

    /**
     * Retail
     *
     * @var int
     */
    public static $retail = 206;

    /**
     * Evolution Live
     *
     * @var int
     */
    public static $evolution_live = 207;

    /**
     * Fazi
     *
     * @var int
     */
    public static $fazi = 208;

    /**
     * Personal QR
     *
     * @var int
     */
    public static $personal_qr = 209;

    /**
     * Aquipago
     *
     * @var int
     */
    public static $aquipago = 210;

    /**
     * SpinCraft
     *
     * @var int
     */
    public static $spincraft = 211;

    /**
     * Get transaction description
     *
     * @param int $provider Provider ID
     * @param int $transactionType Transaction type
     * @param int|null $action Action ID
     * @param object $data Transaction data
     *
     * @return string|null
     */
    public static function getDescription($provider, $transactionType, $action, $data)
    {
        $description = null;
        switch ($provider) {
            case self::$manual_adjustments:
            case self::$dotworkers:
            {
                $description = $data->description;
                break;
            }
            case self::$sportbook:
            case self::$bc_versus:
            {
                $providerTransaction = isset($data->bet) ? $data->bet : $data->provider_transaction;
                switch ($data->bet_type) {
                    case 'DEBIT_BET':
                    {
                        $description = _i('Bet #%s', [$providerTransaction]);
                        break;
                    }
                    case 'REVERSE_EVENT':
                    {
                        $description = _i('Bet #%s reversed', [$providerTransaction]);
                        break;
                    }
                    case 'CREDIT_BET':
                    {
                        $description = _i('Bet #%s won', [$providerTransaction]);
                        break;
                    }
                    case 'RETURN_BET':
                    {
                        $description = _i('Bet #%s returned', [$providerTransaction]);
                        break;
                    }
                    case 'CASHBACK_BET':
                    {
                        $description = _i('Cashback for bet #%s', [$providerTransaction]);
                        break;
                    }
                    case 'CREDIT_BONUS':
                    {
                        $description = _i('Bonus for bet #%s', [$providerTransaction]);
                        break;
                    }
                }
                break;
            }
            case self::$center_horses:
            {
                $providerTransaction = isset($data->bet) ? $data->bet : $data->provider_transaction;
                switch ($data->bet_type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s', [$providerTransaction]);
                        break;
                    }
                    case 'revert':
                    {
                        $description = _i('Bet reverse #%s', [$providerTransaction]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s won', [$providerTransaction]);
                        break;
                    }
                    case 'return':
                    {
                        $description = _i('Bet #%s returned', [$providerTransaction]);
                        break;
                    }
                    case 'cancel':
                    {
                        $description = _i('Bet #%s canceled', [$providerTransaction]);
                        break;
                    }
                }
                break;
            }
            case self::$ocb_slots:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    if ($data->bet_type == 'rollback') {
                        $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game]);

                    } else {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);
                    }
                } else {
                    if ($data->bet_type == 'rollback') {
                        $description = _i('Rollback bet #%s won on the game %s', [$data->provider_transaction, $data->game]);

                    } else {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                    }
                }
                break;
            }
            case self::$credit_codes:
            {
                $description = _i('Deposit via credit code %s', [$data->code]);
                break;
            }
            case self::$wire_transfers:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via wire transfer');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                        default:
                        {
                            $description = _i('Deposit via wire transfer');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            if (isset($data->reference)) {
                                $description = _i('Balance unlocked by approved withdrawal. Reference %s', $data->reference);
                            } else {
                                $description = _i('Balance unlocked by approved withdrawal');
                            }
                            break;
                        }
                        default:
                        {
                            $description = _i('Withdrawal via wire transfer');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$tv_bet:
            {
                $providerTransaction = isset($data->bet_id) ? $data->bet_id : $data->provider_transaction;
                switch ($data->type) {
                    case -1:
                    {
                        $description = _i('Bet #%s', [$providerTransaction]);
                        break;
                    }
                    case 1:
                    {
                        $description = _i('Bet #%s won', [$providerTransaction]);
                        break;
                    }
                    case 2:
                    {
                        $description = _i('Bet #%s refunded', [$providerTransaction]);
                        break;
                    }
                    case 4:
                    {
                        $description = _i('Payout of jackpot #%s', [$providerTransaction]);
                        break;
                    }
                }
                break;
            }
        
            case self::$vivo_gaming:
            {
                switch ($data->type) {
                    case 'BET':
                    {
                        $description = _i('Bet #%s. Round #%s', [$data->provider_transaction, $data->round,]);
                        break;
                    }
                    case 'WIN':
                    {
                        $description = _i('Bet #%s won. Round #%s', [$data->provider_transaction, $data->round,]);
                        break;
                    }
                    case 'CANCELED_BET':
                    {
                        $description = _i('Bet #%s canceled. Round #%s', [$data->provider_transaction, $data->round,]);
                        break;
                    }
                }
                break;
            }

            case self::$ezugi:
            case self::$ezugi_games:
            case self::$evolution:
            case self::$evolution_live:
            case self::$evolution_slots:
            case self::$net_ent;
            case self::$red_tiger_copies;
            case self::$dlv:
            case self::$rgs_gaming:
            {
                if (isset($data->type)) {
                    switch ($data->type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Bet #%s on the game %s cancelled', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$andes_sportbook:
            {
                $description = $data->description;
                break;
            }
            case self::$wnet_games:
            {
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s', [implode("','", $data->provider_transaction), $data->game,]);
                            break;
                        }
                        case 'won':
                        {
                            $description = _i('Bet #%s on the game %s won', [implode("','", $data->provider_transaction), $data->game,]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s on the game %s refunded', [implode("','", $data->provider_transaction), $data->game,]);
                            break;
                        }
                    }
                } else {
                    switch ($data->type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s', [implode("','", $data->provider_transaction), $data->game,]);
                            break;
                        }
                        case 'won':
                        {
                            $description = _i('Bet #%s on the game %s won', [implode("','", $data->provider_transaction), $data->game,]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s on the game %s refunded', [implode("','", $data->provider_transaction), $data->game,]);
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$just_pay:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            if (is_null($data) || isset($data->alps_status)) {
                                $description = _i('Withdrawal rejected by ALPS');
                            } else {
                                $description = _i('Deposit via ALPS. Reference %s', [$data->reference]);
                            }
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by approved withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$lucky_spins:
            {
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s on the game %s won. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s on the game %s refunded. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                    }
                } else {
                    switch ($data->type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s on the game %s won. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s on the game %s refunded. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$i_soft_bet_copies:
            {
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s on the game %s won. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s on the game %s refunded. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                    }
                } else {
                    switch ($data->type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s on the game %s won. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s on the game %s refunded. Round #%s', [$data->provider_transaction, $data->game, $data->round_id,]);
                            break;
                        }
                    }
                    break;
                }
            }
        
            case self::$agents:
            case self::$agents_users:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Direct agent credit. From: %s. Toward %s', [$data->from, $data->to,]);
                } else {
                    $description = _i('Direct agent debit. From: %s. Toward %s', [$data->from, $data->to,]);
                }
                break;
            }
            case self::$yggdrasil:
            case self::$belatra:
            case self::$gamzix:
            case self::$barbara_bang:
            case self::$caleta_gaming:
            case self::$high_5_games:
            case self::$betsoft:
            case self::$play_son:
            case self::$mancala_gaming:
            case self::$red_rake:
            case self::$ruby_play:
            case self::$triple_cherry_original:
            case self::$fbm_gaming:
            case self::$zitro:
            case self::$mojos_7:
            case self::$amigo_gaming:
            case self::$amusnet_egt:
            case self::$ct_interactive:
            case self::$mascot_gaming:
            case self::$ortiz_gaming:
            case self::$mobadoo:
            case self::$habanero:
            case self::$gaming_1x2:
            case self::$wild_gaming:
            case self::$endorphina:
            case self::$game_art:
            case self::$pg_soft:
            case self::$fazi:
            case self::$hacksaw_gaming:
            case self::$playson_vg:
            case self::$spincraft:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);

                        break;
                    }
                    case 'refund':
                    {
                        if (isset($data->name)) {
                            $description = _i('Bet #%s refunded on the game %s', [$data->provider_transaction, $data->name]);
                        } elseif (isset($data->game)) {
                            $description = _i('Bet #%s refunded on the game %s', [$data->provider_transaction, $data->game]);
                        }
                        break;
                    }
                }
                break;
            }
            case self::$aviatrix:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        if (isset($data->name)) {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->name]);
                        } elseif (isset($data->game)) {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                        }
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);

                        break;
                    }
                    case 'refund':
                    {
                        $description = _i('Bet #%s refunded on the game %s', [$data->provider_transaction, $data->name]);
                        break;
                    }
                }
                break;
            }

            case self::$salsa_gaming:
            case self::$bgaming:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                        break;
                    }
                    case 'credit':
                    {
                        if (isset($data->name)) {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->name]);
                        } elseif (isset($data->game)) {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);
                        }
                        break;
                    }
                    case 'refund':
                    {
                        $description = _i('Bet #%s refunded on the game %s', [$data->provider_transaction, $data->name]);
                        break;
                    }
                }
                break;
            }

            case self::$spribe:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);

                        break;
                    }
                    case 'refund':
                    {
                        $description = _i('Bet #%s refunded on the game %s', [$data->provider_transaction, $data->name]);
                        break;
                    }
                }
                break;
            }

            case self::$sky_wind:
            {
                $providerTransaction = isset($data->round) ? $data->round : $data->provider_transaction;
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s on the game %s won', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Rollback bet #%s on the game %s', [$providerTransaction, $data->game,]);
                            break;
                        }
                    }
                } else {
                    $providerTransaction = isset($data->round) ? $data->round : $data->provider_transaction;
                    switch ($data->type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s on the game %s', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s on the game %s won', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Rollback bet #%s on the game %s', [$providerTransaction, $data->game,]);
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$sisvenprol:
            {
                $providerTransaction = isset($data->ticket_id) ? $data->ticket_id : $data->provider_transaction;
                switch ($data->bet_type) {
                    case 'bet':
                    {
                        $description = _i('Bet #%s on game %s in date %s', [$providerTransaction, $data->draw_name, $data->draw_date,]);
                        break;
                    }
                    case 'win':
                    {
                        $description = _i('Bet #%s won on game %s', [$providerTransaction, $data->draw_name,]);
                        break;
                    }
                    case 'return':
                    {
                        $description = _i('Bet #%s returned', [$providerTransaction]);
                        break;
                    }
                }
                break;
            }
            case self::$xlive:
            {
                if (isset($data->type)) {
                    switch ($data->type) {
                        case 'ROLLBACK':
                        {
                            $description = _i('Rollback bet #%s. Transaction #%s', [$data->bet, $data->provider_transaction,]);
                            break;
                        }
                        case 'TICKET_INSERTED':
                        {
                            $description = _i('Bet #%s. Transaction #%s', [$data->bet, $data->provider_transaction,]);
                            break;
                        }
                        case 'TICKET_WON':
                        {
                            $description = _i('Bet #%s won. Transaction #%s', [$data->bet, $data->provider_transaction,]);
                            break;
                        }
                        case 'UNDO_TICKET_WON':
                        {
                            $description = _i('Bet #%s reversed. Transaction #%s', [$data->bet, $data->provider_transaction,]);
                            break;
                        }
                    }
                } else {
                    if ($transactionType == TransactionTypes::$credit) {
                        $description = _i('Bet #%s won', [$data->bet]);
                    } else {
                        $description = _i('Bet #%s', [$data->bet]);
                    }
                }
                break;
            }
            case self::$zelle:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Zelle');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing via zelle');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            if (isset($data->reference)) {
                                $description = _i('Balance unlocked by approved withdrawal. Reference %s', $data->reference);
                            } else {
                                $description = _i('Balance unlocked by approved withdrawal');
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$bonus:
            {
                if (isset($data->type)) {
                    if ($data->type == 'canceled') {
                        $description = _i('Bonus canceled');
                    }
                } else {
                    if (isset($data->released)) {
                        if ($data->released == 'false') {
                            $description = $data->campaign;
                        } else {
                            $description = _i('Bonus converted to real balance: %s', [$data->campaign]);
                        }
                    } else {
                        $description = isset($data->campaign) ? $data->campaign : $data->description;
                    }
                }
                break;
            }
            case self::$golden_race:
            case self::$spinmatic:
            {
                switch ($data->bet_type) {
                    case 'bet':
                    {
                        $description = _i('Bet #%s on the game %s. Round #%s', [$data->provider_transaction, $data->game, $data->round,]);
                        break;
                    }
                    case 'win':
                    {
                        $description = _i('Bet #%s on the game %s won. Round #%s', [$data->provider_transaction, $data->game, $data->round,]);
                        break;
                    }
                    case 'cancel':
                    {
                        $description = _i('Bet #%s on the game %s cancelled. Round #%s', [$data->provider_transaction, $data->game, $data->round,]);
                        break;
                    }
                }
                break;
            }
            case self::$iq_soft:
            case self::$lega_jackpot:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Bet #%s on the game %s won. Round #%s', [$data->provider_transaction, $data->game, $data->round,]);
                } else {
                    $description = _i('Bet #%s on the game %s. Round #%s', [$data->provider_transaction, $data->game, $data->round,]);
                }
                break;
            }
            case self::$virtual_generation:
            {
                switch ($data->bet_type) {
                    case 'bet':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'won':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'cancel':
                    {
                        $description = _i('Bet #%s canceled on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$mobile_payment:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via mobile payment');
                }
                break;
            }
            case self::$paypal:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via PayPal');
                } else {
                    $description = _i('Withdrawal via PayPal');
                }
                break;
            }
            case self::$skrill:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Skrill');
                } else {
                    $description = _i('Withdrawal via Skrill');
                }
                break;
            }
            case self::$neteller:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Neteller');
                } else {
                    $description = _i('Withdrawal via Neteller');
                }
                break;
            }
            case self::$cryptocurrencies:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Cryptocurrency');
                } else {
                    $description = _i('Withdrawal via Cryptocurrency');
                }
                break;
            }
            case self::$airtm:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via AirTM');
                } else {
                    $description = _i('Withdrawal via AirTM');
                }
                break;
            }
            case self::$uphold:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Uphold');
                } else {
                    $description = _i('Withdrawal via Uphold');
                }
                break;
            }
            case self::$pago_123:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    if (isset($data->bank_transaction)) {
                        $description = _i('Deposit via 123Pago. Transaction #%s Credit card %s', [$data->bank_transaction, $data->credit_card,]);
                    } else {
                        $description = _i('Deposit via 123Pago. Transaction #%s Credit card %s', [$data->{'123pago_transaction'}, $data->credit_card,]);
                    }
                }
                break;
            }
            case self::$zippy:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Zippy. Transaction #%s', [$data->transaction]);
                }
                break;
            }
            case self::$inmejorable:
            {
                $providerTransaction = isset($data->reference) ? $data->reference : $data->provider_transaction;
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'bet':
                        {
                            $description = _i('Bet #%s', [$providerTransaction]);
                            break;
                        }
                        case 'win':
                        {
                            $description = _i('Bet #%s won', [$providerTransaction]);
                            break;
                        }
                        case 'refund':
                        {
                            $description = _i('Bet #%s returned', [$providerTransaction]);
                            break;
                        }
                    }
                } else {
                    if ($transactionType == TransactionTypes::$credit) {
                        $description = _i('Bet #%s won', [$providerTransaction]);
                    } else {
                        $description = _i('Bet #%s', [$providerTransaction]);
                    }
                }
                break;
            }
            case self::$pragmatic_play:
            case self::$pragmatic_play_virtual:
            case self::$pragmatic_play_live_casino:
            {
                $providerTransaction = $data->round ?? $data->provider_transaction ?? null;
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Rollback on the game %s', [$data->game,]);
                            break;
                        }
                        case 'promoWin':
                        {
                            $description = _i('Prize #%s won', [$providerTransaction,]);
                            break;
                        }
                    }
                } else {
                    $providerTransaction = $data->round ?? $data->provider_transaction ?? null;
                    switch ($data->type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$providerTransaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Rollback on the game %s', [$data->game,]);
                            break;
                        }
                        case 'promoWin':
                        {
                            $description = _i('Prize #%s won', [$providerTransaction,]);
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$evo_play:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'refund':
                    {
                        $description = _i('Bet #%s returned on the game %s', [$data->type, $data->game,]);
                        break;
                    }
                    default:
                    {
                        $description = _i('Bet #%s on the game: %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$ka_gaming:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'revoke':
                    {
                        $description = _i('Bet #%s returned on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$vls:
            case self::$animals_deluxe:
            {
                $providerTransaction = isset($data->round) ? $data->round : $data->provider_transaction;
                switch ($data->type) {
                    case 'bet':
                    {
                        $description = _i('Bet #%s on the game %s', [$providerTransaction, $data->game,]);
                        break;
                    }
                    case 'win':
                    {
                        $description = _i('Bet #%s on the game %s won', [$providerTransaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Rollback bet #%s on the game %s', [$providerTransaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$patagonia:
            case self::$booongo:
            case self::$booming_games:
            case self::$kiron_interactive:
            case self::$espresso_games:
            case self::$triple_cherry:
            {
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'refund':
                        {
                            $description = _i('Bet #%s refunded on the game %s. Round #%s', [$data->reference, $data->game, $data->provider_transaction,]);
                            break;
                        }
                        case 'default':
                        {
                            if ($transactionType == TransactionTypes::$credit) {
                                $description = _i('Bet #%s on the game %s won. Round #%s', [$data->reference, $data->game, $data->provider_transaction,]);
                            } else {
                                $description = _i('Bet #%s on the game %s. Round #%s', [$data->reference, $data->game, $data->provider_transaction,]);
                            }
                            break;
                        }
                    }
                } else {
                    switch ($data->type) {
                        case 'refund':
                        {
                            $description = _i('Bet #%s refunded on the game %s. Round #%s', [$data->reference, $data->name, $data->provider_transaction,]);
                            break;
                        }
                        case 'default':
                        {
                            if ($transactionType == TransactionTypes::$credit) {
                                $description = _i('Bet #%s on the game %s won. Round #%s', [$data->reference, $data->name, $data->provider_transaction,]);
                            } else {
                                $description = _i('Bet #%s on the game %s. Round #%s', [$data->reference, $data->name, $data->provider_transaction,]);
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$total_pago:
            {
                if (isset($data->reference)) {
                    $description = _i('Deposit via Total Pago. Reference %s', [$data->reference]);
                } else {
                    $description = _i('Deposit via Total Pago');
                }
                break;
            }

            case self::$store:
            {
                $description = _i('Exchange of %s store points for %s', [$data->points, $data->reward,]);
                break;
            }
            case self::$event_bet:
            case self::$branka:
            case self::$branka_originals:
            case self::$wazdan:
            {
                switch ($data->bet_type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s', [$data->provider_transaction]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s won', [$data->provider_transaction]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Rollback bet #%s', [$data->provider_transaction]);
                        break;
                    }
                }
                break;
            }
            case self::$vcreditos:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via VCreditos');
                } else {
                    $description = _i('Withdrawal via VCreditos');
                }
                break;
            }
            case self::$booongo_original:
            case self::$kalamba:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$ves_to_usd:
            {
                $vesAmount = number_format($data->ves_amount, 2);
                $rate = number_format($data->rate, 2);
                $description = _i('Deposit from VES to USD. VES amount: %s. Rate: %s', [$vesAmount, $rate,]);
                break;
            }

            case self::$sw3:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s', [$data->provider_transaction, $data->game]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s won', [$data->provider_transaction, $data->game]);
                        break;
                    }
                }
                break;
            }
            case self::$live_player:
            case self::$mohio:
            case self::$veneto_sportbook:
            {
                switch ($data->type) {
                    case 'bet':
                    {
                        $description = _i('Bet #%s', [$data->provider_transaction]);
                        break;
                    }
                    case 'win':
                    {
                        $description = _i('Bet #%s won', [$data->provider_transaction]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Rollback bet #%s', [$data->provider_transaction]);
                        break;
                    }
                }
                break;
            }

            case self::$greentube:
            {
                switch ($data->type) {
                    case 'bet':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'win':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$play_n_go:
            {
                switch ($data->bet_type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Win a transaction #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$altenar:
            {
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'credit':
                        case 'stakeDecrease':
                        {
                            $description = _i('Bet #%s won. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                        case 'debit':
                        {
                            $description = _i('Bet #%s. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                        case 'refund':
                        {
                            if ($data->type == TransactionTypes::$debit) {
                                $description = _i('Rollback prize #%s. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            } else {
                                $description = _i('Rollback bet #%s. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            }
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Bet #%s returned. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                        case 'cashout':
                        {
                            $description = _i('Bet #%s withdrawn. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                    }
                } else {
                    switch ($data->type) {
                        case 'credit':
                        case 'stakeDecrease':
                        case 'win':
                        {
                            $description = _i('Bet #%s won. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                        case 'debit':
                        case 'bet':
                        {
                            $description = _i('Bet #%s. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                        case 'refund':
                        {
                            if ($data->type == TransactionTypes::$debit) {
                                $description = _i('Rollback prize #%s. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            } else {
                                $description = _i('Rollback bet #%s. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            }
                            break;
                        }
                        case 'rollback':
                        {
                            $description = _i('Bet #%s returned. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                        case 'cashout':
                        {
                            $description = _i('Bet #%s withdrawn. Reference #%s', [$data->provider_transaction, $data->reference,]);
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$universal_soft:
            {
                switch ($data->type) {
                    case 'win':
                    {
                        $description = _i('Bet #%s won', [$data->provider_transaction]);
                        break;
                    }
                    case 'bet':
                    {
                        $description = _i('Bet #%s', [$data->provider_transaction]);
                        break;
                    }
                    case 'refund':
                    {
                        $description = _i('Bet #%s returned', [$data->provider_transaction]);
                        break;
                    }
                }
                break;
            }
            case self::$betby:
            {
                switch ($data->type) {
                    case 'win':
                    case 'credit':
                    {
                        $description = _i('Bet #%s won. Reference #%s', [$data->provider_transaction, $data->round]);
                        break;
                    }
                    case 'bet':
                    case 'debit':
                    {
                        $description = _i('Bet #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        break;
                    }
                    case 'refund':
                    {
                        $description = _i('Refund bet #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        break;
                    }
                    case 'rollback':
                    {
                        if ($data->rollback == 'prize') {
                            $description = _i('Rollback prize #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        } else {
                            $description = _i('Rollback bet #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        }
                        break;
                    }
                }
                break;
            }
            case self::$digitain:
            {
                switch ($data->type) {
                    case 'win':
                    case 'credit':
                    {
                        $description = _i('Bet #%s won. Reference #%s', [$data->provider_transaction, $data->round]);
                        break;
                    }
                    case 'bet':
                    case 'debit':
                    {
                        $description = _i('Bet #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        break;
                    }
                    case 'refund':
                    {
                        if ($data->type == 'bet' || $data->type == 'debit') {
                            $description = _i('Rollback prize #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        } else {
                            $description = _i('Rollback bet #%s. Reference #%s', [$data->provider_transaction, $data->round]);
                        }
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Bet #%s returned. Reference #%s', [$data->provider_transaction, $data->round,]);
                        break;
                    }
                }
                break;
            }
            case self::$i_soft_bet:
            case self::$one_touch:
            {
                switch ($data->bet_type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        if ($transactionType == TransactionTypes::$debit) {
                            $description = _i('Rollback prize #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        } else {
                            $description = _i('Rollback bet #%s on the game %s', [
                                $data->provider_transaction,
                                $data->game,
                            ]);
                        }
                        break;
                    }
                }
                break;
            }
            case self::$pari_play:
            case self::$smart_soft:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        if ($data->transactionType == TransactionTypes::$debit) {
                            $description = _i('Rollback prize #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        } else {
                            $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        }
                        break;
                    }
                }
                break;
            }
            case self::$pay_for_fun:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Pay for Fun');
                } else {
                    $description = _i('Withdrawal via Pay for Fun');
                }
                break;
            }
            case self::$vcreditos_api:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via VCreditos API');
                } else {
                    $description = _i('Withdrawal via VCreditos API');
                }
                break;
            }
            case self::$abitab:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Abitab');
                } else {
                    $description = _i('Withdrawal via Abitab');
                }
                break;
            }
            case self::$red_pagos:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Red Pagos');
                } else {
                    $description = _i('Withdrawal via Red Pagos');
                }
                break;
            }
            case self::$directa24:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Directa24');
                } else {
                    $description = _i('Withdrawal via Directa24');
                }
                break;
            }
            case self::$pay_retailers:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Pay Retailers');
                } else {
                    $description = _i('Withdrawal via Pay Retailers');
                }
                break;
            }
            case self::$urgent_games:
            case self::$vibra:
            {
                switch ($data->type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    case 'rollback':
                    {
                        $description = _i('Bet #%s returned on the game %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                    default:
                    {
                        $description = _i('Bet #%s on the game: %s', [$data->provider_transaction, $data->game,]);
                        break;
                    }
                }
                break;
            }
            case self::$adams_pay:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Adams Pay');
                } else {
                    $description = _i('Withdrawal via Adams Pay');
                }
                break;
            }
            case self::$platipus:
            {
                switch ($data->bet_type) {
                    case 'debit':
                    {
                        $description = _i('Bet #%s with round %s on the game %s', [$data->provider_transaction, $data->round, $data->game,]);
                        break;
                    }
                    case 'credit':
                    {
                        if (isset($data->round)) {
                            $description = _i('Bet #%s with round %s on the game %s won', [$data->provider_transaction, $data->round, $data->game,]);
                        } else {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                        }
                        break;
                    }
                    case 'rollback':
                    {
                        if ($data->transactionType == TransactionTypes::$debit) {
                            $description = _i('Rollback prize #%s with round %s on the game %s', [$data->provider_transaction, $data->round, $data->game,]);
                        } else {
                            $description = _i('Rollback bet #%s with round %s on the game %s', [$data->provider_transaction, $data->round, $data->game,]);
                        }
                        break;
                    }
                }
                break;
            }
            case self::$swintt:
            {
                if (isset($data->bet_type)) {
                    switch ($data->bet_type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            if ($data->transactionType == TransactionTypes::$debit) {
                                $description = _i('Rollback prize #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            } else {
                                $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            }
                            break;
                        }
                    }
                } else {
                    switch ($data->type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            if ($data->transactionType == TransactionTypes::$debit) {
                                $description = _i('Rollback prize #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            } else {
                                $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            }
                            break;
                        }
                    }
                    break;
                }
            }
            case self::$coral_commerce:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Coral Commerce. Transaction %s', $data->betpay_transaction);
                }
                break;
            }
            case self::$monnet:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Monnet');
                } else {
                    $description = _i('Withdrawal via Monnet');
                }
                break;
            }
            case self::$dot_suite:
            case self::$tangente:
            case self::$ainsworth:
            case self::$plexasoft:
            case self::$fresh_deck:
            case self::$betsoft_vg:
            case self::$tom_horn_vg:
            case self::$platipus_vg:
            case self::$booongo_vg:
            case self::$leap_vg:
            case self::$arrows_edge_vg:
            case self::$red_rake_vg:
            case self::$geet_bet:
            case self::$beter:
            case self::$vivo_gaming_bingo:
            case self::$tgg_interactive:
            case self::$five_men_gaming:
            case self::$beter_live_casino:
            case self::$inbet:
            case self::$spinomenal_vg:
            case self::$five_men_vg:
            case self::$air_dice:
            case self::$net_gaming:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    if (isset($data->bet_type)) {
                        switch ($data->bet_type) {
                            case 'rollback':
                            {
                                if (isset($data->session)) {
                                    $description = _i('Bet rollback on the game %s. Session %s', [$data->game, $data->session]);
                                } else {
                                    $providerTransaction = isset($data->event) ? $data->event : $data->provider_transaction;
                                    $description = _i('Rollback bet #%s on the game %s', [$providerTransaction, $data->game,]);
                                }
                                break;
                            }
                            case 'refund':
                            {
                                $description = _i('Bet #%s returned on the game %s', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'win':
                            {
                                $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'bet':
                            {
                                $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'buy freeSpins':
                            {
                                $description = _i('Buy freeSpins #%s on the game %s', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'freeSpins':
                            {
                                $description = _i('Bet #%s on the game %s won by freeSpins', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'default':
                            {
                                if (isset($data->provider_transaction)) {
                                    $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game, $data->round]);
                                } else {
                                    if (isset($data->event)) {
                                        $description = _i('Bet #%s on the game %s won', [$data->event, $data->game]);
                                    } else {
                                        $description = _i('Bet on the game %s won. Round #%s. Session %s', [$data->game, $data->round, $data->session]);
                                    }
                                }
                                break;
                            }
                        }
                    } else {
                        if (isset($data->type)) {
                            switch ($data->type) {
                                case 'rollback':
                                {
                                    if (isset($data->session)) {
                                        $description = _i('Bet rollback on the game %s. Session %s', [$data->game, $data->session,]);
                                    } else {
                                        $providerTransaction = isset($data->event) ? $data->event : $data->provider_transaction;
                                        $description = _i('Rollback bet #%s on the game %s', [$providerTransaction, $data->game,]);
                                    }
                                    break;
                                }
                                case 'refund':
                                {
                                    $description = _i('Bet #%s returned on the game %s', [$data->provider_transaction, $data->game]);
                                    break;
                                }
                                case 'win':
                                {
                                    $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);
                                    break;
                                }
                                case 'bet':
                                {
                                    $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                                    break;
                                }
                                case 'buy freeSpins':
                                {
                                    $description = _i('Buy freeSpins #%s on the game %s', [$data->provider_transaction, $data->game]);
                                    break;
                                }
                                case 'freeSpins':
                                {
                                    $description = _i('Bet #%s on the game %s won by freeSpins', [$data->provider_transaction, $data->game]);
                                    break;
                                }
                                case 'default':
                                {
                                    if (isset($data->provider_transaction)) {
                                        $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game, $data->round]);
                                    } else {
                                        if (isset($data->event)) {
                                            $description = _i('Bet #%s on the game %s won', [$data->event, $data->game]);
                                        } else {
                                            $description = _i('Bet on the game %s won. Round #%s. Session %s', [$data->game, $data->round, $data->session]);
                                        }
                                    }
                                    break;
                                }
                            }
                        }
                    }
                } else {
                    if (isset($data->bet_type)) {
                        switch ($data->bet_type) {
                            case 'rollback':
                            {
                                if (isset($data->session)) {
                                    $description = _i('Bet won rollback on the game %s. Session %s', [$data->game, $data->session,]);
                                } else {
                                    $providerTransaction = isset($data->event) ? $data->event : $data->provider_transaction;
                                    $description = _i('Rollback bet #%s on the game %s', [$providerTransaction, $data->game,]);
                                }
                                break;
                            }
                            case 'refund':
                            {
                                $description = _i('Bet #%s returned on the game %s', [$data->provider_transaction, $data->game,]);
                                break;
                            }
                            case 'win':
                            {
                                $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'bet':
                            {
                                $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'buy freeSpins':
                            {
                                $description = _i('Buy freeSpins #%s on the game %s', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'freeSpins':
                            {
                                $description = _i('Bet #%s on the game %s won by freeSpins', [$data->provider_transaction, $data->game]);
                                break;
                            }
                            case 'default':
                            {
                                $providerTransaction = isset($data->event) ? $data->event : $data->provider_transaction;
                                $description = _i('Rollback bet #%s won on the game %s', [
                                    $providerTransaction,
                                    $data->game,
                                ]);
                                break;
                            }
                        }
                    } else {
                        switch ($data->type) {
                            case 'default':
                            {
                                if (isset($data->provider_transaction)) {
                                    $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                                } else {
                                    if (isset($data->event)) {
                                        $description = _i('Bet #%s on the game %s', [$data->event, $data->game,]);
                                    } else {
                                        $description = _i('Bet on the game %s. Round #%s. Session %s', [$data->game, $data->round, $data->session,]);
                                    }
                                }
                                break;
                            }
                        }
                    }
                }
                break;
            }
            case self::$bizum:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via bizum');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing via bizum');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            if (isset($data->reference)) {
                                $description = _i('Balance unlocked by approved withdrawal. Reference %s', $data->reference);
                            } else {
                                $description = _i('Balance unlocked by approved withdrawal');
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$payku:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via payKu');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$pronto_paga:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via prontopaga');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$pay_for_fun_go:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via pay for fun go');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$reserve:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Reserve');
                } else {
                    $description = _i('Withdrawal via Reserve');
                }
                break;
            }
            case self::$zampay:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via zampay');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$charging_point:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via charging point');
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal. Code %s', $data->reference);
                            break;
                        }
                    }
                }
                break;
            }
            case self::$nequi:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via Nequi');
                } else {
                    $description = _i('Withdrawal via Nequi');
                }
                break;
            }
            case self::$pago_medios:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    $description = _i('Deposit via PagoMedios');
                }
                break;
            }
            case self::$cockfight:
            {
                if (isset($data->type)) {
                    switch ($data->type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            if ($transactionType == TransactionTypes::$debit) {
                                $description = _i('Rollback prize #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            } else {
                                $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$paguelo_facil:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via PagueloFacil');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$pagsmile:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Pagsmile');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$mercado_pago:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Mercado Pago');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing via MercadoPago');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            if (isset($data->reference)) {
                                $description = _i('Balance unlocked by approved withdrawal. Reference %s', $data->reference);
                            } else {
                                $description = _i('Balance unlocked by approved withdrawal');
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$jeyweb:
            {
                if (isset($data->type)) {
                    switch ($data->type) {
                        case 'debit':
                        {
                            $description = _i('Bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'credit':
                        {
                            $description = _i('Bet #%s on the game %s won', [$data->provider_transaction, $data->game,]);
                            break;
                        }
                        case 'rollback':
                        {
                            if ($transactionType == TransactionTypes::$debit) {
                                $description = _i('Rollback prize #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            } else {
                                $description = _i('Rollback bet #%s on the game %s', [$data->provider_transaction, $data->game,]);
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$primepag:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Primepag');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing via Primepag');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            if (isset($data->reference)) {
                                $description = _i('Balance unlocked by approved withdrawal. Reference %s', $data->reference);
                            } else {
                                $description = _i('Balance unlocked by approved withdrawal');
                            }
                            break;
                        }
                    }
                }
                break;
            }
            case self::$niubiz:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Niubiz');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$nulink:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Nulink');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                        default:
                        {
                            if (isset($data->wallet)) {
                                $description = _i('Deposit via Nulink. Deposit to wallet %s', $data->wallet);
                            }
                            break;
                        }

                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i('Balance locked for withdrawal processing');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked by withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$feenicia:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via Feenicia');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$four_on:
            {
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i('Deposit via 4On');
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                        default:
                        {
                            $description = _i('Deposit via 4On');
                            break;
                        }
                    }
                }
                break;
            }
            case self::$bti:
            {
                switch ($data->type) {
                    case 'reserve':
                    {
                        $description = _i('Reserve #%s for bet', [$data->provider_transaction]);
                        break;
                    }
                    case 'cancel_reserve':
                    {
                        $description = _i('Reserve #%s cancelled', [$data->provider_transaction]);
                        break;
                    }
                    case 'commit_reserve':
                    {
                        $description = _i('Reserve #%s cofirmed', [$data->provider_transaction]);
                        break;
                    }
                    case 'cashout':
                    {
                        $description = _i('Bet cashout #%s', [$data->provider_transaction]);
                        break;
                    }
                    case 'bet':
                    {
                        $description = _i('Bet #%s', [$data->provider_transaction]);
                        break;
                    }
                    case 'credit':
                    {
                        $description = _i('Bet #%s won', [$data->provider_transaction]);
                        break;
                    }
                    case 'resettlement':
                    {
                        $description = _i('Bet resettlement #%s', [$data->provider_transaction]);
                        break;
                    }
                    case 'bet_correction':
                    {
                        $description = _i('Bet correction #%s', [$data->provider_transaction]);
                        break;
                    }

                }
                break;
            }
            case self::$dinelco:
            case self::$pagopar:
            case self::$binance:
            case self::$binance_inswitch:
            case self::$pix_inswitch:
            case self::$inswitch:
            case self::$tigo:
            case self::$wally:
            case self::$claro:
            case self::$vpos:
            case self::$vpos_qr:
            case self::$zimple:
            case self::$personal:
            case self::$personal_qr:
            case self::$retail:
            case self::$aquipago:
            {
                $name = self::getName($provider);
                if ($transactionType == TransactionTypes::$credit) {
                    switch ($action) {
                        case Actions::$generic:
                        {
                            $description = _i("Deposit via $name");
                            break;
                        }
                        case Actions::$unlock:
                        {
                            $description = _i('Balance unlocked and returned to wallet due to rejected withdrawal');
                            break;
                        }
                        default:
                        {
                            $description = _i("Deposit via $name");
                            break;
                        }
                    }
                } else {
                    switch ($action) {
                        case Actions::$lock:
                        {
                            $description = _i("Balance locked for withdrawal processing via $name");
                            break;
                        }
                        case Actions::$unlock:
                        {
                            if (isset($data->reference)) {
                                $description = _i('Balance unlocked by approved withdrawal. Reference %s', $data->reference);
                            } else {
                                $description = _i('Balance unlocked by approved withdrawal');
                            }
                            break;
                        }
                        default:
                        {
                            $description = _i("Withdrawal via $name");
                            break;
                        }
                    }
                }
                break;
            }
            default:
            {
                $description = _i('Provider description not configured');
                break;
            }
        }
        return $description;
    }

    /**
     * Get provider name
     *
     * @param int $provider Provider ID
     *
     * @return mixed|string|null
     */
    public static function getName(int $provider)
    {
        $name = null;
        switch ($provider) {
            case self::$dotworkers:
            case self::$manual_adjustments:
            {
                $name = Configurations::getWhitelabelDescription();
                break;
            }
            case self::$sportbook:
            {
                $name = _i('SportBook');
                break;
            }
            case self::$veneto_sportbook:
            {
                $name = _i('VGC SportBook');
                break;
            }
            case self::$center_horses:
            {
                $name = _i('Center Horses');
                break;
            }
            case self::$ocb_slots:
            {
                $name = _i('OCB Slots');
                break;
            }
            case self::$betpay:
            {
                $name = _i('BetPay');
                break;
            }
            case self::$credit_codes:
            {
                $name = _i('Credit codes');
                break;
            }
            case self::$ves_to_usd:
            case self::$wire_transfers:
            {
                $name = _i('Wire transfers');
                break;
            }
            case self::$tv_bet:
            {
                $name = _i('TV Bet');
                break;
            }
            case self::$ezugi:
            {
                $name = _i('Ezugi');
                break;
            }
            case self::$vivo_gaming:
            {
                $name = _i('VivoGaming');
                break;
            }
            case self::$dlv:
            {
                $name = _i('DLV');
                break;
            }
            case self::$andes_sportbook:
            {
                $name = _i('Andes SportBook');
                break;
            }
            case self::$wnet_games:
            {
                $name = _i('WNet Games');
                break;
            }
            case self::$just_pay:
            {
                $name = _i('ALPS');
                break;
            }
            case self::$lucky_spins:
            {
                $name = _i('Lucky Spins');
                break;
            }
            case self::$play_n_go:
            {
                $name = _i("Play'n Go");
                break;
            }
            case self::$agents:
            case self::$agents_users:
            {
                $name = _i('Agents');
                break;
            }
            case self::$salsa_gaming:
            {
                $name = _i('Salsa Gaming');
                break;
            }
            case self::$caleta_gaming:
            {
                $name = _i('Caleta Gaming');
                break;
            }
            case self::$sisvenprol:
            {
                $name = _i('Sisvenprol');
                break;
            }
            case self::$xlive:
            {
                $name = _i('XLive');
                break;
            }
            case self::$zelle:
            {
                $name = _i('Zelle');
                break;
            }
            case self::$bonus:
            {
                $name = _i('Bonus');
                break;
            }
            case self::$golden_race:
            {
                $name = _i('Golden Race');
                break;
            }
            case self::$iq_soft:
            {
                $name = _i('IQ Soft');
                break;
            }
            case self::$lega_jackpot:
            {
                $name = _i('Lega Jackpot');
                break;
            }
            case self::$virtual_generation:
            {
                $name = _i('Virtual Generation');
                break;
            }
            case self::$mobile_payment:
            {
                $name = _i('Mobile payment');
                break;
            }
            case self::$paypal:
            {
                $name = _i('PayPal');
                break;
            }
            case self::$skrill:
            {
                $name = _i('Skrill');
                break;
            }
            case self::$neteller:
            {
                $name = _i('Neteller');
                break;
            }
            case self::$cryptocurrencies:
            {
                $name = _i('Cryptocurrencies');
                break;
            }
            case self::$airtm:
            {
                $name = _i('AirTM');
                break;
            }
            case self::$uphold:
            {
                $name = _i('Uphold');
                break;
            }
            case self::$apcopay:
            {
                $name = _i('Apcopay');
                break;
            }
            case self::$yeipii:
            {
                $name = _i('YEiPii');
                break;
            }
            case self::$pago_123:
            {
                $name = _i('123Pago');
                break;
            }
            case self::$agency:
            {
                $name = _i('Agency');
                break;
            }
            case self::$zippy:
            {
                $name = _i('Zippy');
                break;
            }
            case self::$inmejorable:
            {
                $name = _i('El Inmejorable');
                break;
            }
            case self::$pragmatic_play:
            {
                $name = _i('Pragmatic Play');
                break;
            }
            case self::$play_son:
            {
                $name = _i('Playson');
                break;
            }
            case self::$ka_gaming:
            {
                $name = _i('Ka Gaming');
                break;
            }
            case self::$paycips:
            {
                $name = _i('PayCIPS');
                break;
            }
            case self::$gamzix:
            {
                $name = _i('Gamzix');
                break;
            }
            case self::$vls:
            {
                $name = _i('VLS');
                break;
            }
            case self::$patagonia:
            {
                $name = _i('Patagonia');
                break;
            }
            case self::$pg_soft:
            {
                $name = _i('PG Soft');
                break;
            }
            case self::$booongo:
            {
                $name = _i('Booongo');
                break;
            }
            case self::$game_art:
            {
                $name = _i('GameArt');
                break;
            }
            case self::$booming_games:
            {
                $name = _i('Booming Games');
                break;
            }
            case self::$kiron_interactive:
            {
                $name = _i('Kiron Interactive');
                break;
            }
            case self::$hacksaw_gaming:
            {
                $name = _i('Hacksaw Gaming');
                break;
            }
            case self::$triple_cherry:
            case self::$triple_cherry_original:
            {
                $name = _i('Triple Cherry');
                break;
            }
            case self::$espresso_games:
            {
                $name = _i('Expresso Games');
                break;
            }
            case self::$spinmatic:
            {
                $name = _i('Spinmatic');
                break;
            }
            case self::$color_spin:
            {
                $name = _i('Color Spin');
                break;
            }
            case self::$total_pago:
            {
                $name = _i('Total Pago');
                break;
            }
            case self::$mascot_gaming:
            {
                $name = _i('Mascot Gaming');
                break;
            }
            case self::$store:
            {
                $name = _i('Store');
                break;
            }
            case self::$event_bet:
            {
                $name = _i('Event Bet');
                break;
            }
            case self::$spin_deluxe:
            {
                $name = _i('Spin Deluxe');
                break;
            }
            case self::$monnet:
            {
                $name = _i('Monnet');
                break;
            }
            case self::$branka:
            {
                $name = _i('Branka');
                break;
            }
            case self::$oobit:
            {
                $name = _i('Oobit');
                break;
            }
            case self::$animals_deluxe:
            {
                $name = _i('Animals Deluxe');
                break;
            }
            case self::$branka_originals:
            {
                $name = _i('Branka Originals');
                break;
            }
            case self::$vcreditos:
            {
                $name = _i('VCreditos');
                break;
            }
            case self::$evolution:
            {
                $name = _i('Evolution');
                break;
            }
            case self::$mohio:
            {
                $name = _i('Mohio');
                break;
            }
            case self::$dot_live:
            {
                $name = _i('SBL Games');
                break;
            }
            case self::$wazdan:
            {
                $name = _i('Wazdan');
                break;
            }
            case self::$belatra:
            {
                $name = _i('Belatra');
                break;
            }
            case self::$pragmatic_play_live_casino:
            {
                $name = _i('PragmaticPlay Live Casino');
                break;
            }
            case self::$booongo_original:
            {
                $name = _i('Booongo original');
                break;
            }
            case self::$mancala_gaming:
            {
                $name = _i('Mancala Gaming');
                break;
            }
            case self::$sw3:
            {
                $name = _i('SW3');
                break;
            }
            case self::$red_rake:
            {
                $name = _i('Red Rake');
                break;
            }
            case self::$altenar:
            {
                $name = _i('Altenar');
                break;
            }
            case self::$evo_play:
            {
                $name = _i('Evo Play');
                break;
            }
            case self::$i_soft_bet:
            {
                $name = _i('iSoftBet');
                break;
            }
            case self::$pari_play:
            {
                $name = _i('PariPlay');
                break;
            }
            case self::$kalamba:
            {
                $name = _i('Kalamba');
                break;
            }
            case self::$pay_for_fun:
            {
                $name = _i('Pay for Fun');
                break;
            }
            case self::$universal_soft:
            {
                $name = _i('Horses');
                break;
            }
            case self::$telegram:
            {
                $name = _i('Telegram');
                break;
            }
            case self::$vpos:
            {
                $name = _i('VPOS');
                break;
            }
            case self::$live_player:
            {
                $name = _i('Live Player');
                break;
            }
            case self::$vcreditos_api:
            {
                $name = _i('VCreditos API');
                break;
            }
            case self::$abitab:
            {
                $name = _i('Abitab');
                break;
            }
            case self::$red_pagos:
            {
                $name = _i('Red Pagos');
                break;
            }
            case self::$directa24:
            {
                $name = _i('Directa24');
                break;
            }
            case self::$urgent_games:
            {
                $name = _i('Urgent Games');
                break;
            }
            case self::$ortiz_gaming:
            {
                $name = _i('Ortiz Gaming');
                break;
            }
            case self::$vibra:
            {
                $name = _i('Vibra');
                break;
            }
            case self::$fbm_gaming:
            {
                $name = _i('FBM Gaming');
                break;
            }
            case self::$evolution_slots:
            {
                $name = _i('Evolution Slots');
                break;
            }
            case self::$one_touch:
            {
                $name = _i('One Touch');
                break;
            }
            case self::$endorphina:
            {
                $name = _i('Endorphina');
                break;
            }
            case self::$greentube:
            {
                $name = _i('Greentube');
                break;
            }
            case self::$zimple:
            {
                $name = _i('VPOS Zimple');
                break;
            }
            case self::$platipus:
            {
                $name = _i('Platipus');
                break;
            }
            case self::$bc_versus:
            {
                $name = _i('Versus');
                break;
            }
            case self::$smart_soft:
            {
                $name = _i('Smart Soft');
                break;
            }
            case self::$swintt:
            {
                $name = _i('Swintt');
                break;
            }
            case self::$sky_wind:
            {
                $name = _i('Sky Wind');
                break;
            }
            case self::$rgs_gaming:
            {
                $name = _i('Ct-Interactive');
                break;
            }
            case self::$dot_suite:
            {
                $name = _i('Dot Suite');
                break;
            }
            case self::$coral_commerce:
            {
                $name = _i('Coral Commerce');
                break;
            }
            case self::$fantasy:
            {
                $name = _i('Fantasy');
                break;
            }
            case self::$booming_games_origin:
            {
                $name = _i('Booming Games Origin');
                break;
            }
            case self::$dls:
            {
                $name = _i('DLS');
                break;
            }
            case self::$pragmatic_play_virtual:
            {
                $name = _i('Pragmatic Play Virtual');
                break;
            }
            case self::$net_ent:
            {
                $name = _i('Net Ent');
                break;
            }
            case self::$skillzz_gaming:
            {
                $name = _i('Skillzz Gaming');
                break;
            }
            case self::$dragon_gaming:
            {
                $name = _i('Dragon Gaming');
                break;
            }
            case self::$eurasian_gaming:
            {
                $name = _i('Eurasian Gaming');
                break;
            }
            case self::$betsoft:
            {
                $name = _i('Betsoft');
                break;
            }
            case self::$tangente:
            {
                $name = _i('Tangente');
                break;
            }
            case self::$betby:
            {
                $name = _i('Betby');
                break;
            }
            case self::$fresh_deck:
            {
                $name = _i('Fresh Deck');
                break;
            }
            case self::$ainsworth:
            {
                $name = _i('Ainsworth');
                break;
            }
            case self::$plexasoft:
            {
                $name = _i('Plexasoft');
                break;
            }
            case self::$store_money:
            {
                $name = _i('Store Money');
                break;
            }
            case self::$ruby_play:
            {
                $name = _i('Ruby Play');
                break;
            }
            case self::$ezugi_games:
            {
                $name = _i('Ezugi Games');
                break;
            }
            case self::$betsoft_vg:
            {
                $name = _i('Betsoft VG');
                break;
            }
            case self::$tom_horn_vg:
            {
                $name = _i('Tom Horn VG');
                break;
            }
            case self::$platipus_vg:
            {
                $name = _i('Platipus VG');
                break;
            }
            case self::$booongo_vg:
            {
                $name = _i('Booongo VG');
                break;
            }
            case self::$playson_vg:
            {
                $name = _i('Playson VG');
                break;
            }
            case self::$leap_vg:
            {
                $name = _i('Leap VG');
                break;
            }
            case self::$arrows_edge_vg:
            {
                $name = _i('Arrows Edge VG');
                break;
            }
            case self::$red_rake_vg:
            {
                $name = _i('Red Rake VG');
                break;
            }
            case self::$geet_bet:
            {
                $name = _i('Geet Bet');
                break;
            }
            case self::$beter:
            {
                $name = _i('Beter');
                break;
            }
            case self::$charging_point:
            {
                $name = _i('Charging point');
                break;
            }
            case self::$binance:
            case self::$binance_inswitch:
            {
                $name = _i('Binance');
                break;
            }
            case self::$bizum:
            {
                $name = _i('Bizum');
                break;
            }
            case self::$payku:
            {
                $name = _i('Payku');
                break;
            }
            case self::$vivo_gaming_bingo:
            {
                $name = _i('Vivo gaming bingo');
                break;
            }
            case self::$barbara_bang:
            {
                $name = _i('Barbara bang');
                break;
            }
            case self::$pronto_paga:
            {
                $name = _i('Pronto Paga');
                break;
            }
            case self::$digitain:
            {
                $name = _i('Digitain');
                break;
            }
            case self::$bgaming:
            {
                $name = _i('Bgaming');
                break;
            }
            case self::$pay_for_fun_go:
            {
                $name = _i('Pay For Fun Go');
                break;
            }
            case self::$personal:
            {
                $name = _i('Personal');
                break;
            }
            case self::$personal_qr:
            {
                $name = _i('Personal QR');
                break;
            }
            case self::$aquipago:
            {
                $name = _i('Aquipago');
                break;
            }
            case self::$reserve:
            {
                $name = _i('Reserve');
                break;
            }
            case self::$five_men_gaming:
            {
                $name = _i('5Men Gaming');
                break;
            }
            case self::$tgg_interactive:
            {
                $name = _i('TGG Interactive');
                break;
            }
            case self::$zampay:
            {
                $name = _i('ZamPay');
                break;
            }
            case self::$nequi:
            {
                $name = _i('Nequi');
                break;
            }
            case self::$cockfight:
            {
                $name = _i('Cockfight');
                break;
            }
            case self::$beter_live_casino:
            {
                $name = _i('Beter live casino');
                break;
            }
            case self::$inbet:
            {
                $name = _i('Inbet');
                break;
            }
            case self::$spinomenal_vg:
            {
                $name = _i('Spinomenal VG');
                break;
            }
            case self::$five_men_vg:
            {
                $name = _i('5Men VG');
                break;
            }
            case self::$pago_medios:
            {
                $name = _i('Pago medios');
                break;
            }
            case self::$paguelo_facil:
            {
                $name = _i('PagueloFacil');
                break;
            }
            case self::$pagsmile:
            {
                $name = _i('Pagsmile');
                break;
            }
            case self::$mercado_pago:
            {
                $name = _i('MercadoPago');
                break;
            }
            case self::$jeyweb:
            {
                $name = _i('Jeyweb');
                break;
            }
            case self::$primepag:
            {
                $name = _i('Primepag');
                break;
            }
            case self::$niubiz:
            {
                $name = _i('Niubiz');
                break;
            }
            case self::$i_soft_bet_copies:
            {
                $name = _i('IsoftBet');
                break;
            }
            case self::$red_tiger_copies:
            {
                $name = _i('Red Tiger');
                break;
            }
            case self::$nulink:
            {
                $name = _i('Nulink');
                break;
            }
            case self::$spribe:
            {
                $name = _i('Spribe');
                break;
            }
            case self::$cupon_star:
            {
                $name = _i('Cuponstar');
                break;
            }
            case self::$air_dice:
            {
                $name = _i('AirDice');
                break;
            }
            case self::$feenicia:
            {
                $name = _i('Feenicia');
                break;
            }
            case self::$net_gaming:
            {
                $name = _i('NetGaming');
                break;
            }
            case self::$four_on:
            {
                $name = _i('4On');
                break;
            }
            case self::$dinelco:
            {
                $name = _i('Dinelco');
                break;
            }
            case self::$pagopar:
            {
                $name = _i('Pagopar');
                break;
            }
            case self::$pix_inswitch:
            {
                $name = _i('Pix');
                break;
            }
            case self::$inswitch:
            {
                $name = _i('Inswitch');
                break;
            }
            case self::$bti:
            {
                $name = _i('BTI');
                break;
            }
            case self::$tigo:
            {
                $name = _i('Tigo Money');
                break;
            }
            case self::$wally:
            {
                $name = _i('Wally');
                break;
            }
            case self::$claro:
            {
                $name = _i('Giros Claro');
                break;
            }
            case self::$yggdrasil:
            {
                $name = _i('Yggdrasil');
                break;
            }
            case self::$high_5_games:
            {
                $name = _i('High 5 Games');
                break;
            }
            case self::$mojos_7:
            {
                $name = _i('7 Mojos');
                break;
            }
            case self::$zitro:
            {
                $name = _i('Zitro');
                break;
            }
            case self::$amigo_gaming:
            {
                $name = _i('Amigo Gaming');
                break;
            }
            case self::$vpos_qr:
            {
                $name = _i('Bancard QR');
                break;
            }
            case self::$gaming_1x2:
            {
                $name = _i('1x2 Gaming');
                break;
            }
            case self::$amusnet_egt:
            {
                $name = _i('Amusnet/EGT');
                break;
            }
            case self::$aviatrix:
            {
                $name = _i('Aviatrix');
                break;
            }
            case self::$ct_interactive:
            {
                $name = _i('CT Interactive');
                break;
            }
            case self::$mobadoo:
            {
                $name = _i('Mobadoo');
                break;
            }
            case self::$habanero:
            {
                $name = _i('Habanero');
                break;
            }
            case self::$wild_gaming:
            {
                $name = _i('Wild Gaming');
                break;
            }
            case self::$sprint_gaming:
            {
                $name = _i('SprintGaming');
                break;
            }
            case self::$aristocrat:
            {
                $name = _i('Aristocrat');
                break;
            }
            case self::$creedroomz:
            {
                $name = _i('Creedroomz');
                break;
            }
            case self::$retail:
            {
                $name = _i('Retail SA');
                break;
            }
            case self::$evolution_live:
            {
                $name = _i('Evolution Live');
                break;
            }
            case self::$fazi:
            {
                $name = _i('Fazi');
                break;
            }
            case self::$spincraft:
            {
                $name = _i('SpinCraft');
                break;
            }
            default:
            {
                $name = _i('Provider name not configured');
                break;
            }
        }

        return $name;
    }
}
