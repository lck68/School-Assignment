import time
print("自助功德增加器！")
b = input("请输入姓名：")
n = int(input("请输入要增加的次数："))
a = input("是否确认增加？输入y/n:")
if a == "y":
  i=0
  while i<=n-1:
     print("已为",b,"功德+1","已加",i+1,"次")
     i += 1
     time.sleep(0.5)
  print("已完成！")
else:
   print("已取消增加！")
    