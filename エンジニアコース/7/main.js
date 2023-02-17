//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
/* function isEven() {
    for (let i = 0; i < numbers.length; i++) {
        let num = numbers[i]
        if(num % 2 === 0){
        console.log(num + 'は偶数です');
      };
    };
}

isEven(); */

for (let i = 0; i < numbers.length; i++) {
    isEven(numbers[i]);
  };

function isEven(num) {
    if(num % 2 === 0){
    console.log(num + 'は偶数です');
    };
}

isEven();


//問2
class Car {
    //コンストラクタ
    constructor(gas, number) {
        this.gas = gas;
        this.number = number;
    }

    //メソッド
    getNumGas() {
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
    }
}
//「山田」オブジェクト作成
let car1 = new Car(20, 1111);
car1.getNumGas();

let car2 = new Car(24, 2222);
car2.getNumGas();

//チャレンジ問題
class Taiyaki {

    //コンストラクタ
    constructor(contents) {
        this.contents = contents;
    }

    //歩くメソッド（関数）作成
    Nakami() {
        console.log(`中身は${this.contents}です`);
    }
}
//「山田」オブジェクト作成
let anko = new Taiyaki('あんこ');
anko.Nakami();
