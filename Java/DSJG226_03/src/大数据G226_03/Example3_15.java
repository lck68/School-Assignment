package 大数据G226_03;

abstract class Animal0{
	String breed;
	int weight;
	public abstract void enjoy();
}
class Dog0 extends Animal0{
	public Dog0(String breed,int weight){
		this.breed=breed;
		this.weight=weight;
	}
	public void enjoy(){
		System.out.print(breed+"是一种狗，体重大约"+weight+"公斤，");
		System.out.print("是一种忠诚又强悍的动物！");
	}
}
class Cat0 extends Animal0{
	public Cat0(String breed,int weight){
		this.breed=breed;
		this.weight=weight;
	}
	public void enjoy(){
		System.out.print(breed+"是一种猫，体重大约"+weight+"公斤，");
		System.out.print("是一种温尔文雅的动物！");
	}
}
public class Example3_15 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Dog0 d=new Dog0("藏獒",67);
		d.enjoy();
		Cat0 c=new Cat0("波斯猫",6);
		c.enjoy();

	}

}
