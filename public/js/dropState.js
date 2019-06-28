var countryOptions = {};
countryOptions["Canada"] = ['British Columbia', 'Alberta', 'Ontario', 'Manitoba',
    'New Brunswick', 'Ontario', 'Newfoundland and Labrador', 'Northwest Territories', 'Nova Scotia', 'Nunavut', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Yukon'
];
countryOptions["United States"] = ["Alabama", "Alaska", 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District Of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

window.setOptions = function () {
    var countryList = document.getElementById("country");
    var provinceList = document.getElementById("province");
    var selCountry = countryList.options[countryList.selectedIndex].value;

    while (provinceList.options.length) {
        provinceList.remove(0);
    }

    var provinces = countryOptions[selCountry];
    var option;
    if (provinces) {
        var i;
        for (i = 0; i < provinces.length; i++) {
            option = new Option(provinces[i]);
            provinceList.options.add(option);
        }
    }
}
