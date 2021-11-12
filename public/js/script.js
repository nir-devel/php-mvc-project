'use strict'; 


const game = {
    players: [
        [
            'a',
            'b',
            'c',
            'd',
        ],
        [
            'x', 
            'y',
            'w',
            'z'
            

        ]

    ]
    ,
    odds: {
        team1: 3.4,
        x: 1.2,
        team2: 5.6
    }
}

// const[players1, players2] = game.players; 

// console.log(players1);
// console.log(players2);

// const allPlayers = [...players1, ...players2];
// console.log(allPlayers); 

// const [gk, ...fieldPlayers] = players1; 
// console.log(`Goal Keeper: ${gk}`);
// console.log(`Field Players: ${fieldPlayers}`);


// console.log(game.odds);
// const {odds : {team1, x:draw, team2}}  = game; 
// console.log(`team1 = ${team1}, x = ${draw}, team2 = ${team2}`)

// // console.log(`odds: ${odds}`)

// //Create a finalArray with substitues from players1 array 

// const finalArray = [...players1, 'Nir', 'nir'];

// console.log(`final Array: ${finalArray}`)


/******************************************
 *                  SETS
 ************************************/

// const ordersSet =new Set( ['Pasta', 'Pizza', 'Pizza', 'Risoto', 'Pizza', 'Pizza']);


// console.log(ordersSet); 


// console.log(`size of set = ${ordersSet.size}`)

// console.log(ordersSet.has('Pasta'))
// console.log(ordersSet.has('sfsf'))
 

// console.log(ordersSet)

// ordersSet.delete('Pasta'); 

// console.log(ordersSet); 

// // ordersSet.clear(); 

// // console.log(ordersSet); 


// for(const order of ordersSet) console.log(order); 

// /*
// USE CASE - Remove Duplicate from arrays:
// Using the Spread operator to unpack the Set and create a new array
// */
// const books = [1 ,2,  3, 4 ,5 , 6, 5, 1, 2]; 
// const booksSet = new Set(books); 

// console.log(booksSet.size);

// //THIS WILL NOT WORK
// // const [...booksArr] = booksSet;
// // console.log(booksArr);


// // const booksArr = [...ordersSet];
// // console.log(booksArr)

// const countUnique = function(itterable)
// {
//     return new Set(itterable).size;

// }

// console.log(countUnique([2,3,2,2])); 

// console.log(countUnique('niraaaab itzhak')); 


/*************************************************
 *              MAPS
 ********************************************/
const rest = new Map(); 

for(let i = 0 ; i < 10; i++)
{
    rest.set(i, `user ${i}`); 
}

for(const [key, value] of rest) console.log(`key = ${key}, value = ${value}`)

console.log('>>>>>>>>>>>>'); 
rest.set('catogories', ['starter', 'primaries']).set(true, 'Nir')

for(const [key, value] of rest) console.log(`key = ${key}, value = ${value}`)




// const headerEl = document.querySelector('header');
// headerEl.textContent = 'HelloNir';
// headerEl.style.color = 'red'; 
// headerEl.style.backgroundColor = 'green'; 



















