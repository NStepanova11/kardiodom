<?php
require_once __DIR__ . '/simple-xlsx/simplexlsx.class.php';

class PriceTable{
    private $xlsx;
    private $sheet; 

    private $title;  
    private $subtitles = array();
    private $price_list = array();

    function __construct(){
        //$this->xlsx = new SimpleXLSX(__DIR__ . '/../assets/docs/price.xlsx');

        $url = get_site_url();
        $path_to_xlsx = (ABSPATH . substr(get_theme_mod('price_file'),strlen($url)+1));
        if (!empty(get_theme_mod('price_file'))){
            $this->xlsx = new SimpleXLSX($path_to_xlsx);
            $this->sheet = $this->xlsx->rows();
            $this->parse_xlsx();
        }
    }

    private function parse_xlsx(){

        if (!empty($this->sheet)){
            //удаляет строку заголовка из массива значений
            $this->title= $this->sheet[0];
            unset($this->sheet[0]);

            foreach($this->sheet as $key=>$row){
                
                $empty_count = 0;
                for($i=0; $i<count($row); $i++){
                    if(empty($row[$i]))
                        $empty_count++;
                }

                //если строка не пустая, сохраняет ее в price_list
                if ($empty_count!=count($row))
                    array_push($this->price_list, $row);
                
                //если в строке только одна непустая ячейка, то сохраняет ее индекс в массив позаголовков
                if ($empty_count==count($row)-1)
                    array_push($this->subtitles, count($this->price_list)-1);
                $n++;
            }
        }
    }

    //поиск по запросу (search.php)
   public function get_search_result($query){
        if (!empty($query) && !empty($this->price_list)) { 
            $search_result = $this->search($query); 
            $this->show_search_result($search_result);
        }
   }
      
   //приведение к нижнему регистру и поиск построки в каждой ячейке строки (код, название, цена) 
   private function search($search_query){
       $search_res = array();
       $search_query = trim(mb_convert_case($search_query, MB_CASE_LOWER, "UTF-8"));

       foreach($this->price_list as $key=>$row){
           foreach($row as $cell_value){
               $value = mb_convert_case($cell_value, MB_CASE_LOWER, "UTF-8");
               if (strpos($value, $search_query)!==false){
                   if (in_array($key, $this->subtitles, true)==false){
                        array_push($search_res, $row);
                   }
               }
           }
       }
       return $search_res;
   }

   //вывод результата поиска
   private function show_search_result($search_result){
        if (count($search_result)!=0){  
            $this->show_recommendation();

            /*
            echo '<div class = "search__result__title">';
                echo "Результатов по запросу \"".get_search_query()."\" : ".count($search_result);
            echo '</div>';
            */

            $this->show_table($search_result);
          
        }
        else{
            echo '<div class = "no__result">';
                echo "По запросу \"".get_search_query()."\" ничего не найдено";
            echo '</div>';
        }
    }

    //вывод прайса на стр услуги и цены
    public function show_price_table(){
        if (!empty($this->price_list)){
            $this->show_recommendation();
            $this->show_table($this->price_list);
        }
    }    


    //вывод строки заголовка на страницу
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

    //вывод рекомендации
    private function show_recommendation(){
            echo '<div class = "analyzes_recommendation">';
            echo 'Важное уточнение: все анализы проводятся натощак';
            echo '</div>';
    }


    //вывод таблицы
    private function show_table($table){
        $is_price = false;
        if ($table == $this->price_list)
            $is_price=true;

    echo '<div class= "table__box">';
    echo '<table class="price__table">';
    $this->show_header();
    foreach($table as $key=>$row){
        echo '<tr class="price__table__row">';

        if ($is_price){
                if(in_array($key, $this->subtitles, true)!=false){
                    echo '<td class="subtitle" colspan = "'.strval(count($row)).'">';
                    echo $row[0];
                    echo '</td>';
                }
                else{
                    $this->show_table_cells($row);
                }
            }
            else{
                $this->show_table_cells($row);
            }
        echo '</tr>';
    }
        echo '</table>';
        echo '</div>';
    }

    //вывод ячеек таблицы
    private function show_table_cells($row){
        for( $i=0; $i<count($row); $i++){
            $table_class = "\"price__table__cell__".strval($i)."\"";
            echo '<td class='.$table_class.'>';
                echo $row[$i];
            echo '</td>';
        }
    }
}
?>