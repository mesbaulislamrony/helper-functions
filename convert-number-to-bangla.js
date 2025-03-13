/**
 *  Function: Convert Number to Bangla.
 *
 *  Description: 
 *  This function can convert number to bangla.
 *  
*/

function convertNumberToBangla(number) {
    if (number < 0 || number > 999999999) {
        throw new Error("সংখ্যাটি নির্ধারিত সীমার বাইরে!");
    }

    const banglaWords = [
        "০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০",
        "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০",
        "২১", "২২", "২৩", "২৪", "২৫", "২৬", "২৭", "২৮", "২৯", "৩০",
        "৩১", "৩২", "৩৩", "৩৪", "৩৫", "৩৬", "৩৭", "৩৮", "৩৯", "৪০",
        "৪১", "৪২", "৪৩", "৪৪", "৪৫", "৪৬", "৪৭", "৪৮", "৪৯", "৫০",
        "৫১", "৫২", "৫৩", "৫৪", "৫৫", "৫৬", "৫৭", "৫৮", "৫৯", "৬০",
        "৬১", "৬২", "৬৩", "৬৪", "৬৫", "৬৬", "৬৭", "৬৮", "৬৯", "৭০",
        "৭১", "৭২", "৭৩", "৭৪", "৭৫", "৭৬", "৭৭", "৭৮", "৭৯", "৮০",
        "৮১", "৮২", "৮৩", "৮৪", "৮৫", "৮৬", "৮৭", "৮৮", "৮৯", "৯০",
        "৯১", "৯২", "৯৩", "৯৪", "৯৫", "৯৬", "৯৭", "৯৮", "৯৯"
    ];

    let result = "";

    const crore = Math.floor(number / 10000000);
    if (crore > 0) {
        result += banglaWords[crore] + " কোটি ";
        number %= 10000000;
    }

    const lakh = Math.floor(number / 100000);
    if (lakh > 0) {
        result += banglaWords[lakh] + " লক্ষ ";
        number %= 100000;
    }

    const thousand = Math.floor(number / 1000);
    if (thousand > 0) {
        result += banglaWords[thousand] + " হাজার ";
        number %= 1000;
    }

    const hundred = Math.floor(number / 100);
    if (hundred > 0) {
        result += banglaWords[hundred] + " শত ";
        number %= 100;
    }

    if (number > 0) {
        result += banglaWords[number];
    }

    return result.trim() + " টাকা";
}

console.log(convertNumberToBangla(480951));      // "৪ লক্ষ ৮০ হাজার ৯৫১ টাকা"
console.log(convertNumberToBangla(99999999));    // "৯ কোটি ৯৯ লক্ষ ৯৯ হাজার ৯৯৯ টাকা"
console.log(convertNumberToBangla(10000000));    // "১ কোটি টাকা"
console.log(convertNumberToBangla(101010101));   // "১০ কোটি ১০ লক্ষ ১০ হাজার ১০১ টাকা"
console.log(convertNumberToBangla(500));         // "পাঁচ শত টাকা"
