print("如需使用此软件，请输入激活码：")
while True:
    password = input("请输入激活码：")
    if password != "123":
       print("激活码错误！请重新输入！")
    else:
       print("激活码正确！已注册！")
       break