package 大数据G226_03;

abstract class Animal05{
	abstract void shout();
}
class Dog05 extends Animal05{
	void shout(){
		System.out.println("狗狗的叫声：旺旺。。。。");
	}
}
public class ExAbstract1 {
	public static void main(String[] args) {
		Dog05 dog=new Dog05();
		dog.shout();
	}

}
