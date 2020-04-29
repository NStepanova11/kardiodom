<?php
require_once __DIR__ . '/simple-xlsx/simplexlsx.class.php';

class PriceTable{
    private $xlsx;
    private $sheet; 

    private $title;  
    private $subtitles = array();
    private $price_list = array();

    function __construct(){
        $this->xlsx = new SimpleXLSX(__DIR__ . '/../assets/docs/price.xlsx');
        $this->sheet = $this->xlsx->rows();

        $this->parse_xlsx();
    }

    private function parse_xlsx(){
        $this->title= $this->sheet[0];
        unset($this->sheet[0]);

        foreach($this->sheet as $key=>$row){
            
            $empty_count = 0;
            for($i=0; $i<count($row); $i++){
                if(empty($row[$i]))
                    $empty_count++;
            }

            if ($empty_count!=count($row))
                array_push($this->price_list, $row);
            
            if ($empty_count==count($row)-1)
                array_push($this->subtitles, count($this->price_list)-1);
            $n++;
        }
    }


   public function get_search_result($query){
        if (!empty($query)) { 
            $search_result = $this->search($query); 
            $this->show_search_result($search_result);
        }
   }
      
   private function search($search_query){
       $search_res = array();
       $search_query = trim(mb_convert_case($search_query, MB_CASE_LOWER, "UTF-8"));

       foreach($this->price_list as $row){
           foreach($row as $cell_value){
               $value = mb_convert_case($cell_value, MB_CASE_LOWER, "UTF-8");
               if (strpos($value, $search_query)!==false){
                   array_push($search_res, $row);
               }
           }
       }
       return $search_res;
   }

   private function show_header(){
        echo '<tr class="price__table__title">';

        for( $i=0; $i<count($this->title); $i++){
            $table_class = "\"price__table__cell__".strval($i)."\"";
            echo '<td class='.$table_class.'>';
                echo $this->title[$i];
            echo '</td>';
        }
        echo '</tr>';
   }

   private function show_search_result($search_result){
        if (count($search_result)!=0){ 
            echo '<div class = "analyzes_recommendation">';
                echo 'Важное уточнение: все анализы проводятся натощак';
            echo '</div>';

            echo '<div class = "search__result__title">';
                echo "Результатов по запросу \"".get_search_query()."\" : ".count($search_result);
            echo '</div>';

            echo '<div class= "table__box">';
            echo '<table class="price__table">';
            $this->show_header();
            foreach($search_result as $key=>$row){
                echo '<tr class="price__table__row">';
                    /*if(in_array($key, $this->subtitles, true)!=false){
                        echo '<td class="subtitle" colspan = "'.strval(count($row)).'">';
                        echo $row[0];
                        echo '</td>';
                    }
                    else{*/
                        for( $i=0; $i<count($row); $i++){
                            $table_class = "\"price__table__cell__".strval($i)."\"";
                            echo '<td class='.$table_class.'>';
                                echo $row[$i];
                            echo '</td>';
                        }
                   // }
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
        }
        else{
            echo '<div class = "no__result">';
                echo 'По запросу <?php echo "\"".get_search_query()."\"";?> ничего не найдено';
            echo '</div>';
        }
    }

    public function show_price_table(){
        echo '<div class = "analyzes_recommendation">';
            echo 'Важное уточнение: все анализы проводятся натощак';
        echo '</div>';

        echo '<div class= "table__box">';
        echo '<table class="price__table">';
        $this->show_header();

        foreach($this->price_list as $key=>$row){
                echo '<tr class="price__table__row">';
                    if(in_array($key, $this->subtitles, true)!=false){
                        echo '<td class="subtitle" colspan = "'.strval(count($row)).'">';
                        echo $row[0];
                        echo '</td>';
                    }
                    else{
                        for( $i=0; $i<count($row); $i++){
                            $table_class = "\"price__table__cell__".strval($i)."\"";
                            echo '<td class='.$table_class.'>';
                                echo $row[$i];
                            echo '</td>';
                        }
                    }
                echo '</tr>';
        }
        echo '</table>';
        echo '</div>';

    }
}
?>