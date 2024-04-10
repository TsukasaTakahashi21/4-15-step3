<?php

// 課題①: 
class TotalCalculator {
  // $total プロパティに 整数を指定
  private int $total;

  public function __construct() {
    $this->total = 0;
  } 
  //  メソッドの返り値に void 型を指定
  public function calculateTotal(): void {
    for ($i = 0; $i < 5; $i++) {
      $this->total += $i;
      var_dump($this->total);
    }
  }
}

$calculator = new TotalCalculator();
$calculator->calculateTotal();
?>


<!-- 課題②:  -->
<?php
class Totalcalculator2 {
  // $total プロパティに 整数を指定
  private int $total;

  public function __construct() {
    $this->total = 0;
  }

  //  メソッドの返り値に void 型を指定
  public function calculateTotal(): void {
    for ($i = 0; $i < 15; $i++) {
      $this->total += $i;
      var_dump($this->total);
    }
  }
}

$calculator = new TotalCalculator2();
$calculator->calculateTotal();

?>

<!-- voidとは？ 

メソッドの返り値に void を指定することは、そのメソッドが何も返さないことを明示的に示すために行われます。この場合、calculateTotal() メソッドは合計値を返すのではなく、内部で計算を行い結果を返すのではなく、単に計算処理を実行して結果を返しません。

-->
