<?php

namespace Firebed\AadeMyData\Enums;

enum CurrencyCode: string
{
    use HasLabels;
    
    case AED = "AED";
    case AFN = "AFN";
    case ALL = "ALL";
    case AMD = "AMD";
    case ANG = "ANG";
    case AOA = "AOA";
    case ARS = "ARS";
    case AUD = "AUD";
    case AWG = "AWG";
    case AZN = "AZN";
    case BAM = "BAM";
    case BBD = "BBD";
    case BDT = "BDT";
    case BGN = "BGN";
    case BHD = "BHD";
    case BIF = "BIF";
    case BMD = "BMD";
    case BND = "BND";
    case BOB = "BOB";
    case BOV = "BOV";
    case BRL = "BRL";
    case BSD = "BSD";
    case BTN = "BTN";
    case BWP = "BWP";
    case BYR = "BYR";
    case BZD = "BZD";
    case CAD = "CAD";
    case CDF = "CDF";
    case CHF = "CHF";
    case CLF = "CLF";
    case CLP = "CLP";
    case CNY = "CNY";
    case COP = "COP";
    case COU = "COU";
    case CRC = "CRC";
    case CUC = "CUC";
    case CUP = "CUP";
    case CVE = "CVE";
    case CZK = "CZK";
    case DJF = "DJF";
    case DKK = "DKK";
    case DOP = "DOP";
    case DZD = "DZD";
    case EEK = "EEK";
    case EGP = "EGP";
    case ERN = "ERN";
    case ETB = "ETB";
    case EUR = "EUR";
    case FJD = "FJD";
    case FKP = "FKP";
    case GBP = "GBP";
    case GEL = "GEL";
    case GHS = "GHS";
    case GIP = "GIP";
    case GMD = "GMD";
    case GNF = "GNF";
    case GTQ = "GTQ";
    case GWP = "GWP";
    case GYD = "GYD";
    case HKD = "HKD";
    case HNL = "HNL";
    case HRK = "HRK";
    case HTG = "HTG";
    case HUF = "HUF";
    case IDR = "IDR";
    case ILS = "ILS";
    case INR = "INR";
    case IQD = "IQD";
    case IRR = "IRR";
    case ISK = "ISK";
    case JMD = "JMD";
    case JOD = "JOD";
    case JPY = "JPY";
    case KES = "KES";
    case KGS = "KGS";
    case KHR = "KHR";
    case KMF = "KMF";
    case KPW = "KPW";
    case KRW = "KRW";
    case KWD = "KWD";
    case KYD = "KYD";
    case KZT = "KZT";
    case LAK = "LAK";
    case LBP = "LBP";
    case LKR = "LKR";
    case LRD = "LRD";
    case LSL = "LSL";
    case LTL = "LTL";
    case LVL = "LVL";
    case LYD = "LYD";
    case MAD = "MAD";
    case MDL = "MDL";
    case MGA = "MGA";
    case MKD = "MKD";
    case MMK = "MMK";
    case MNT = "MNT";
    case MOP = "MOP";
    case MRO = "MRO";
    case MUR = "MUR";
    case MVR = "MVR";
    case MWK = "MWK";
    case MXN = "MXN";
    case MXV = "MXV";
    case MYR = "MYR";
    case MZN = "MZN";
    case NAD = "NAD";
    case NGN = "NGN";
    case NIO = "NIO";
    case NOK = "NOK";
    case NPR = "NPR";
    case NZD = "NZD";
    case OMR = "OMR";
    case PAB = "PAB";
    case PEN = "PEN";
    case PGK = "PGK";
    case PHP = "PHP";
    case PKR = "PKR";
    case PLN = "PLN";
    case PYG = "PYG";
    case QAR = "QAR";
    case RON = "RON";
    case RSD = "RSD";
    case RUB = "RUB";
    case RWF = "RWF";
    case SAR = "SAR";
    case SBD = "SBD";
    case SCR = "SCR";
    case SDG = "SDG";
    case SEK = "SEK";
    case SGD = "SGD";
    case SHP = "SHP";
    case SLL = "SLL";
    case SOS = "SOS";
    case SRD = "SRD";
    case STD = "STD";
    case SVC = "SVC";
    case SYP = "SYP";
    case SZL = "SZL";
    case THB = "THB";
    case TJS = "TJS";
    case TMT = "TMT";
    case TND = "TND";
    case TOP = "TOP";
    case TRY = "TRY";
    case TTD = "TTD";
    case TVD = "TVD";
    case TWD = "TWD";
    case TZS = "TZS";
    case UAH = "UAH";
    case UGX = "UGX";
    case USD = "USD";
    case UYU = "UYU";
    case UZS = "UZS";
    case VEF = "VEF";
    case VND = "VND";
    case VUV = "VUV";
    case WST = "WST";
    case XAF = "XAF";
    case XCD = "XCD";
    case XOF = "XOF";
    case XPD = "XPD";
    case XPF = "XPF";
    case YER = "YER";
    case ZAR = "ZAR";
    case ZMK = "ZMK";
    case ZWL = "ZWL";

    public function label(): string
    {
        return match ($this) {
            // Συμπλήρωσε τα ονόματα
            self::AED => "Ντιρχάμ των Ηνωμένων Αραβικών Εμιράτων",
            self::AFN => "Αφγανή Αφγανιστάν",
            self::ALL => "Λεκ Αλβανίας",
            self::AMD => "Ντραμ Αρμενίας",
            self::ANG => "Γκίλντα Ολλανδικών Αντιλλών",
            self::AOA => "Κουάνζα Αγκόλας",
            self::ARS => "Πέσο Αργεντινής",
            self::AUD => "Δολάριο Αυστραλίας",
            self::AWG => "Φλορίνι Αρούμπα",
            self::AZN => "Μανάτ Αζερμπαϊτζάν",
            self::BAM => "Μάρκο Βοσνίας-Ερζεγοβίνης",
            self::BBD => "Δολάριο Μπαρμπάντος",
            self::BDT => "Τάκα Μπαγκλαντές",
            self::BGN => "Λεβ Βουλγαρίας",
            self::BHD => "Δηνάριο Μπαχρέιν",
            self::BIF => "Φράγκο Μπουρούντι",
            self::BMD => "Δολάριο Βερμούδων",
            self::BND => "Δολάριο Μπρουνέι",
            self::BOB => "Μπολιβιάνο Βολιβίας",
            self::BOV => "Mvdol Βολιβίας",
            self::BRL => "Ρεάλ Βραζιλίας",
            self::BSD => "Δολάριο Μπαχαμών",
            self::BTN => "Νγκούλτρουμ Μπουτάν",
            self::BWP => "Πούλα Μποτσουάνα",
            self::BYR => "Ρούβλι Λευκορωσίας",
            self::BZD => "Δολάριο Μπελίζ",
            self::CAD => "Δολάριο Καναδά",
            self::CDF => "Φράγκο Κονγκό",
            self::CHF => "Φράγκο Ελβετίας",
            self::CLF => "Unidades de fomento Χιλής",
            self::CLP => "Πέσο Χιλής",
            self::CNY => "Γιουάν Κίνας",
            self::COP => "Πέσο Κολομβίας",
            self::COU => "Unidad de Valor Real Κολομβίας",
            self::CRC => "Κολόν Κόστα Ρίκα",
            self::CUC => "Μετατρέψιμο πέσο Κούβας",
            self::CUP => "Πέσο Κούβας",
            self::CVE => "Εσκούδο Πράσινου Ακρωτηρίου",
            self::CZK => "Κορόνα Τσεχίας",
            self::DJF => "Φράγκο Τζιμπουτί",
            self::DKK => "Κορόνα Δανίας",
            self::DOP => "Πέσο Δομινικανής Δημοκρατίας",
            self::DZD => "Δηνάριο Αλγερίας",
            self::EEK => "Κρούνα Εσθονίας",
            self::EGP => "Λίρα Αιγύπτου",
            self::ERN => "Νάκφα Ερυθραίας",
            self::ETB => "Μπιρ Αιθιοπίας",
            self::EUR => "Ευρώ",
            self::FJD => "Δολάριο Φίτζι",
            self::FKP => "Λίρα Νήσων Φόκλαντ",
            self::GBP => "Λίρα Στερλίνα",
            self::GEL => "Λάρι Γεωργίας",
            self::GHS => "Σέντι Γκάνας",
            self::GIP => "Λίρα Γιβραλτάρ",
            self::GMD => "Νταλάσι Γκάμπιας",
            self::GNF => "Φράγκο Γουινέας",
            self::GTQ => "Κετσάλ Γουατεμάλας",
            self::GWP => "Πέσο Γουινέας-Μπισσάου",
            self::GYD => "Δολάριο Γουιάνας",
            self::HKD => "Δολάριο Χονγκ Κονγκ",
            self::HNL => "Λεμπίρα Ονδούρας",
            self::HRK => "Κούνα Κροατίας",
            self::HTG => "Γκουρντ Αϊτής",
            self::HUF => "Φιορίνι Ουγγαρίας",
            self::IDR => "Ρουπία Ινδονησίας",
            self::ILS => "Νέο Σέκελ Ισραήλ",
            self::INR => "Ρουπία Ινδίας",
            self::IQD => "Δηνάριο Ιράκ",
            self::IRR => "Ριάλ Ιράν",
            self::ISK => "Κορόνα Ισλανδίας",
            self::JMD => "Δολάριο Τζαμάικας",
            self::JOD => "Δηνάριο Ιορδανίας",
            self::JPY => "Γιεν Ιαπωνίας",
            self::KES => "Σελίνι Κένυας",
            self::KGS => "Σομ Κιργιζίας",
            self::KHR => "Ρίελ Καμπότζης",
            self::KMF => "Φράγκο Κομόρων",
            self::KPW => "Γουόν Βόρειας Κορέας",
            self::KRW => "Γουόν Νότιας Κορέας",
            self::KWD => "Δηνάριο Κουβέιτ",
            self::KYD => "Δολάριο Νήσων Κέιμαν",
            self::KZT => "Τένγκε Καζακστάν",
            self::LAK => "Κιπ Λάος",
            self::LBP => "Λίρα Λιβάνου",
            self::LKR => "Ρουπία Σρι Λάνκα",
            self::LRD => "Δολάριο Λιβερίας",
            self::LSL => "Λότι Λεσότο",
            self::LTL => "Λίτας Λιθουανίας",
            self::LVL => "Λατς Λετονίας",
            self::LYD => "Δηνάριο Λιβύης",
            self::MAD => "Ντιράμ Μαρόκου",
            self::MDL => "Λέου Μολδαβίας",
            self::MGA => "Αριάρι Μαδαγασκάρης",
            self::MKD => "Δηνάριο Βόρειας Μακεδονίας",
            self::MMK => "Κιάτ Μιανμάρ",
            self::MNT => "Τουγκρίκ Μογγολίας",
            self::MOP => "Πατάκα Μακάο",
            self::MRO => "Ουγκίγια Μαυριτανίας",
            self::MUR => "Ρουπία Μαυρίκιου",
            self::MVR => "Ρουφίγια Μαλδίβων",
            self::MWK => "Κουάτσα Μαλάουι",
            self::MXN => "Πέσο Μεξικού",
            self::MXV => "Unidad de Inversion Μεξικού",
            self::MYR => "Ρινγκίτ Μαλαισίας",
            self::MZN => "Μετικάλ Μοζαμβίκης",
            self::NAD => "Δολάριο Ναμίμπιας",
            self::NGN => "Νάιρα Νιγηρίας",
            self::NIO => "Κόρδοβα Νικαράγουας",
            self::NOK => "Κορόνα Νορβηγίας",
            self::NPR => "Ρουπία Νεπάλ",
            self::NZD => "Δολάριο Νέας Ζηλανδίας",
            self::OMR => "Ριάλ Ομάν",
            self::PAB => "Μπαλμπόα Παναμά",
            self::PEN => "Σολ Περού",
            self::PGK => "Κίνα Παπούας Νέας Γουινέας",
            self::PHP => "Πέσο Φιλιππίνων",
            self::PKR => "Ρουπία Πακιστάν",
            self::PLN => "Ζλότι Πολωνίας",
            self::PYG => "Γκουαρανί Παραγουάης",
            self::QAR => "Ριάλ Κατάρ",
            self::RON => "Λέου Ρουμανίας",
            self::RSD => "Δηνάριο Σερβίας",
            self::RUB => "Ρούβλι Ρωσίας",
            self::RWF => "Φράγκο Ρουάντας",
            self::SAR => "Ριάλ Σαουδικής Αραβίας",
            self::SBD => "Δολάριο Νήσων Σολομώντος",
            self::SCR => "Ρουπία Σεϋχελλών",
            self::SDG => "Λίρα Σουδάν",
            self::SEK => "Κορόνα Σουηδίας",
            self::SGD => "Δολάριο Σιγκαπούρης",
            self::SHP => "Λίρα Αγίας Ελένης",
            self::SLL => "Λεόνε Σιέρα Λεόνε",
            self::SOS => "Σελίνι Σομαλίας",
            self::SRD => "Δολάριο Σουρινάμ",
            self::STD => "Ντόμπρα Σάο Τομέ και Πρίνσιπε",
            self::SVC => "Κολόν Ελ Σαλβαδόρ",
            self::SYP => "Λίρα Συρίας",
            self::SZL => "Λιλανγκένι Σουαζιλάνδης",
            self::THB => "Μπατ Ταϊλάνδης",
            self::TJS => "Σομόνι Τατζικιστάν",
            self::TMT => "Μανάτ Τουρκμενιστάν",
            self::TND => "Δηνάριο Τυνησίας",
            self::TOP => "Παάνγκα της Τόνγκα",
            self::TRY => "Λίρα Τουρκίας",
            self::TTD => "Δολάριο Τρινιντάντ και Τομπάγκο",
            self::TVD => "Δολάριο Τουβαλού",
            self::TWD => "Νέο δολάριο Ταϊβάν",
            self::TZS => "Σελίνι Τανζανίας",
            self::UAH => "Ρίβνια Ουκρανίας",
            self::UGX => "Σελίνι Ουγκάντας",
            self::USD => "Δολάριο Ηνωμένων Πολιτειών",
            self::UYU => "Πέσο Ουρουγουάης",
            self::UZS => "Σομ Ουζμπεκιστάν",
            self::VEF => "Μπολιβάρ Βενεζουέλας",
            self::VND => "Ντονγκ Βιετνάμ",
            self::VUV => "Βατού Βανουάτου",
            self::WST => "Τάλα του Σαμόα",
            self::XAF => "Φράγκο CFA Κεντρικής Αφρικής",
            self::XCD => "Δολάριο Ανατολικής Καραϊβικής",
            self::XOF => "Φράγκο CFA Δυτικής Αφρικής",
            self::XPD => "Παλάδιο",
            self::XPF => "Φράγκο CFP",
            self::YER => "Ριάλ Υεμένης",
            self::ZAR => "Ραντ Νότιας Αφρικής",
            self::ZMK => "Κουάτσα Ζάμπιας",
            self::ZWL => "Δολάριο Ζιμπάμπουε",
        };
    }
}