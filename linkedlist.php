<?php
/*
提供單位:皇程研究所
撰寫者:Edan Huang
歡迎各位同學來加入皇程研究所 https://royalcode.huangting.tech
*/

/* 
主題:Single Linkedlist
    簡單介紹
        1.linked list 是一個資料結構 所謂的資料結構其實就是處理資料的方式 根據不同的應用情況會用不同的資料處理方式
        2.linked list 基本上就是有很多個node 連結在一起
        3.每個node分別有 這個node的資料與下一個node的位置
*/

class Node{//建立一個Class 名叫Node 之後這個用這個class建構的物件裡面的分別會有:
    public $data;//這一個node所包含的資料
    public $next;//下一個Node的位置
    //也就是因為這樣的結構才會像一個鍊子一樣鍊在一起
}
class LinkedList{//這個是Linked list 本身 (Node是Linked List裡面的內容)
    public $head;//建立一個Linked list 的頭
    public function __construct()//這個是一建立物件的時候就會跑的程式碼
    {
        $this->head = null;//將這個頭預設成空的
    }
    public function PrintList(){//列印list用的
        $temp = new Node();//產生一個Node
        $temp = $this->head;//讓上面這個Node先等於list的頭
        if($temp != null)//如果$temp不是空的話
        {
            echo "這個list有: ";
            while($temp!=null){
                echo  $temp -> data;//一直列印這個node裡面的資料
                echo ", ";//列印空白與逗號以便檢視
                $temp=$temp->next;//並且把這個node推向下一個
            }
            echo "\n";
        }
        else{
            echo "這個list是空的.\n";
        }

    }
}
//下面我們開始使用上面寫的 Class們
$MyList = new LinkedList();//產生一個linkedlist
$first = new Node();//產生一個Node
$first -> data ="資料一";//讓這個node的資料等於10(可以放自己想放的資料)
$first -> next =null;//目前這個node的下一個位置設定成空的(還不知道要放啥)
$MyList->head =$first;//然後讓linkedlist的頭的位置等於上面這個node

$second = new Node();//建立第二個node
$second->data="資料二";//把資料放進來
$second->next=null;//下一個位置先給他空直
$first->next=$second;//把第一個node的(下一個node)設置成新創立的第一個node
$MyList->PrintList();//使用我們的function把node給印出來
/*
每個資料結構都有自己適合的使用時機 這邊稍微介紹一下
首先就要先來說一下Array:
    [1,2,3,4,5,6] 假設這是一個Array 如果要在中間一個地方新增東西 電腦實際上需要
    額外建立一個array [空 ,空 ,空 ,空 ,空 ,空 ,空]
    然後再把東西一個一個放進去 
    所以假設你要將 "x"加到3後面:
        放1 放2 放3 放x 放4 放5 放6
            所以就會需要花費時間跟記憶體來做到這件事情

再來說一下同樣一件事情 linkedlist會怎麼做:
    linked list 不是每一個node都會接儲存指標(next的那一個) 表示下一個嗎
    假設你是第三個的後面要加 你只需要把第三個的next改掉 這樣就好了 後面的還是都沒問題
*/