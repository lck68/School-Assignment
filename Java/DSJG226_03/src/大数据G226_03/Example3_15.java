package ������G226_03;

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
		System.out.print(breed+"��һ�ֹ������ش�Լ"+weight+"���");
		System.out.print("��һ���ҳ���ǿ���Ķ��");
	}
}
class Cat0 extends Animal0{
	public Cat0(String breed,int weight){
		this.breed=breed;
		this.weight=weight;
	}
	public void enjoy(){
		System.out.print(breed+"��һ��è�����ش�Լ"+weight+"���");
		System.out.print("��һ���¶����ŵĶ��");
	}
}
public class Example3_15 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Dog0 d=new Dog0("����",67);
		d.enjoy();
		Cat0 c=new Cat0("��˹è",6);
		c.enjoy();

	}

}
