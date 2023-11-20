from ast import Delete
import time
print("欢迎进入留言系统，")
text=input("请输入您的留言：")
liuyan=open("D:/liuyan.txt","a+")
print(time.strftime("%Y-%m-%d,%H:%M:%S",time.localtime(time.time())),">>>",text,file=liuyan)
liuyan.close
print("正在提交，请稍后...")
time.sleep(3)
print("已提交，感谢留言")