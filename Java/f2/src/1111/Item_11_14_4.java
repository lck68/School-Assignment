package 大数据G226_03;

class Person3{
	int age;
	String name;
	public Person3(String name1,int age1){
		name = name1;
		age = age1;
	}
	public Person3(String b){
		name = b;
	}
	public void speak(){
	System.out.println("我的名字"+name+",我今年"+age+"岁");
	}
}
public class Item_11_14_4 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Person3 p1=new Person3("王倩倩",16);
		Person3 p2=new Person3("赵建国");
		p1.speak();
		p2.speak();
	}

}
