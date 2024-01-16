package 大数据G226_03;

class Animal{
	String name;
	void shout(){
	System.out.println(",这种动物的叫声是：汪汪");
	}
}
class Dog extends Animal{
	public void printName(){
		System.out.print("name="+name);
	}
}
public class ExExtends00 {
	public static void main(String[] args) {
		Dog dog=new Dog();
		dog.name="沙皮狗";
		dog.printName();
		dog.shout();
	}

}
