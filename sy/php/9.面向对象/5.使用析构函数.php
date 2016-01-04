使用析构函数
基本概念:
	与构造函数对应的是析构函数
	析构函数在销毁类之前执行，并统一命名_destruct()
		其作用是在类被销毁前自动完成某项功能
代码示例:
<?php
class conn{
	public $hostname;
	public $username;
	public $userpwd;
	public $conn;
	public function _consytruct($x,$y,$z){			//应用构造函数对类体中的属性进行初始化
		$this->hostname=$x;
		$this->username=$y;
		$this->userpwd=$z;
	}
	public function getConn(){						//建立数据库的连接
		$this->conn= MySQL_query($this->username,$this->username,$this->userpwd);
		return $this->conn;
	}
	public function _destruct(){					//应用析构函数自动释放连接资源
		MySQL_close($this->conn);
	}
}
?>