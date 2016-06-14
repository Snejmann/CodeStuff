var animals = [
    {name: 'Snoopi', type: 'dog'},
    {name: 'Satan', type: 'cat'},
    {name: 'Umbri', type: 'elephant'},
    {name: 'Nopsta', type: 'dog'},
    {name: 'Isi', type: 'cat'}
];

var isDog = function(animal) {
    return animal.type == 'dog'
};

var dog = animals.find(isDog);
var names = animals.map(function(animal) {
    return animal.name; 
});

console.log('Change some log file');
console.log(dog);
console.log(names);