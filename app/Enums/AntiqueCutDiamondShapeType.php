<?php

namespace App\Enums;

enum AntiqueCutDiamondShapeType: string
{
    case AEROPLANE = 'AEROPLANE';
    case ALPHABET_A = 'ALPHABET-A';
    case ALPHABET_D = 'ALPHABET-D';
    case ALPHABET_E = 'ALPHABET-E';
    case ALPHABET_H = 'ALPHABET-H';
    case ALPHABET_I = 'ALPHABET-I';
    case ALPHABET_M = 'ALPHABET-M';
    case ALPHABET_O = 'ALPHABET-O';
    case ALPHABET_R = 'ALPHABET-R';
    case ALPHABET_T = 'ALPHABET-T';
    case ANTIQUE_MOVAL = 'ANTIQUE MOVAL';
    case ASHOKA_CRISS = 'ASHOKA (CRISS )';
    case BAGUETTE = 'BAGUETTE';
    case BATMAN = 'BATMAN';
    case BONE = 'BONE';
    case BULL = 'BULL';
    case BULLET = 'BULLET';
    case BUTTERFLY = 'BUTTERFLY';
    case CADILLAC = 'CADILLAC';
    case CARRE = 'CARRE';
    case CAT = 'CAT';
    case CHESS_HORSE = 'CHESS HORSE';
    case CHRISTMAS = 'CHRISTMAS';
    case CLOUD = 'CLOUD';
    case CRISS = 'CRISS';
    // case CROSS = 'CROSS';
    case CUSTOM = 'CUSTOM';
    case DECAGON = 'DECAGON';
    case DIAMOND = 'DIAMOND';
    case DOG = 'DOG';
    case DUCK = 'DUCK';
    case ELEGANCE_EMERALD = 'ELEGANCE EMERALD';
    case EM_ASHOKA = 'EM ASHOKA';
    case EUROPEAN = 'EUROPEAN';
    case FISH = 'FISH';
    case FLAME = 'FLAME';
    case FLOWER = 'FLOWER';
    case GUN = 'GUN';
    case HALF_MOON = 'HALF MOON';
    case HEXAGON = 'HEXAGON';
    case HEXAGONAL = 'HEXAGONAL';
    case HORSE_HEAD = 'HORSE HEAD';
    case KITE = 'KITE';
    case KITE_STEP = 'KITE STEP';
    case L_OCTAGON = 'L OCTAGON';
    case L_PENTAGON = 'L PENTAGAON';
    case L_SHARP_TRIANGLE = 'L SHARP TRIANGLE';
    case L_TRAPEZOID = 'L TRAPEZOID';
    case LILY_TRILLION = 'LILY TRILLION';
    case LOZENGE = 'LOZENGE';
    case LOZENGE_STEP = 'LOZENGE STEP';
    case MD_SHIELD_STEP = 'MD SHIELD STEP';
    case MICKEY_MOUSE = 'MICKEY MOUSE';
    case MONOLITH = 'MONOLITH';
    case MOVAL = 'MOVAL';
    case OCTAGONAL_MD = 'OCTAGONAL MD';
    case OLD_EUROPEAN_ROUND = 'OLD EUROPEAN ROUND';
    case PEAR_OLD = 'PEAR OLD';
    case PENTAGON = 'PENTAGON';
    case PORTUGUESE = 'PORTUGUESE';
    case RABBIT = 'RABBIT';
    case RHOMBOID = 'RHOMBOID';
    case ROSE = 'ROSE';
    case ROUND_MD = 'ROUND MD';
    case ROUND_MODIFI_BRILLIN = 'ROUND MODIFI BRILLIN';
    case ROUND_POLYGON = 'ROUND POLYGON';
    case SHIELD = 'SHIELD';
    case SQUIRREL = 'SQUIRREL';
    case STAR = 'STAR';
    case TAPERED_BAGUETTE = 'TAPERED BAGUETTE';
    case TEDDY_BEAR = 'TEDDY BEAR';
    case TRAPEZOID = 'TRAPEZOID';
    case TRIANGLE = 'TRIANGLE';
    case TRIANGULAR = 'TRIANGULAR';
    case TRILLIANT = 'TRILLIANT';
    case TURTLE = 'TURTLE';
    case WIDE_TRAPEZOID = 'WIDE TRAPEZOID';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
