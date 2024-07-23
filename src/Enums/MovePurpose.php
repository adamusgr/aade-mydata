<?php

namespace Firebed\AadeMyData\Enums;

use Firebed\AadeMyData\Enums\Traits\HasLabels;

enum MovePurpose: int
{
    use HasLabels;

    /**
     *  Πώληση
     */
    case TYPE_1 = 1;


    /**
     *  Πώληση για Λογαριασμό Τρίτων
     */
    case TYPE_2 = 2;


    /**
     *  Δειγματισμός
     */
    case TYPE_3 = 3;


    /**
     *  Έκθεση
     */
    case TYPE_4 = 4;


    /**
     *  Επιστροφή
     */
    case TYPE_5 = 5;


    /**
     *  Φύλαξη
     */
    case TYPE_6 = 6;


    /**
     *  Επεξεργασία Συναρμολόγηση
     */
    case TYPE_7 = 7;


    /**
     *  Μεταξύ Εγκαταστάσεων Οντότητας
     */
    case TYPE_8 = 8;


    /**
     *  Αγορά
     */
    case TYPE_9 = 9;
    

    /**
     *  Εφοδιασμός πλοίων και αεροσκαφών
     */
    case TYPE_10 = 10;
    

    /**
     *  Δωρεάν διάθεση
     */
    case TYPE_11 = 11;
    

    /**
     *  Εγγύηση
     */
    case TYPE_12 = 12;
    

    /**
     *  Χρησιδανεισμός
     */
    case TYPE_13 = 13;
    

    /**
     *  Αποθήκευση σε Τρίτους
     */
    case TYPE_14 = 14;
    

    /**
     *  Επιστροφή από Φύλαξη
     */
    case TYPE_15 = 15;
    

    /**
     *  Ανακύκλωση
     */
    case TYPE_16 = 16;
    

    /**
     *  Καταστροφή άχρηστου υλικού
     */
    case TYPE_17 = 17;
    

    /**
     *  Διακίνηση Παγίων (Ενδοδιακίνηση)
     */
    case TYPE_18 = 18;
    

    /**
     *  Λοιπές Διακινήσεις
     */
    case TYPE_19 = 19;
    
    public function label(): string
    {
        return match ($this) {
            self::TYPE_1  => "Πώληση",
            self::TYPE_2  => "Πώληση για Λογαριασμό Τρίτων",
            self::TYPE_3  => "Δειγματισμός",
            self::TYPE_4  => "Έκθεση",
            self::TYPE_5  => "Επιστροφή",
            self::TYPE_6  => "Φύλαξη",
            self::TYPE_7  => "Επεξεργασία Συναρμολόγηση",
            self::TYPE_8  => "Μεταξύ Εγκαταστάσεων Οντότητας",
            self::TYPE_9  => "Αγορά",
            self::TYPE_10 => "Εφοδιασμός πλοίων και αεροσκαφών",
            self::TYPE_11 => "Δωρεάν διάθεση",
            self::TYPE_12 => "Εγγύηση",
            self::TYPE_13 => "Χρησιδανεισμός",
            self::TYPE_14 => "Αποθήκευση σε Τρίτους",
            self::TYPE_15 => "Επιστροφή από Φύλαξη",
            self::TYPE_16 => "Ανακύκλωση",
            self::TYPE_17 => "Καταστροφή άχρηστου υλικού",
            self::TYPE_18 => "Διακίνηση Παγίων (Ενδοδιακίνηση)",
            self::TYPE_19 => "Λοιπές Διακινήσεις",
        };
    }
}