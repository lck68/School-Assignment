# -*- coding: utf-8 -*-
class Solution(object):
    def solveSudoku(self, board):
        def isvaild(i,j):
            for m in range(9):
                if m!=i and board[m][j]==board[i][j]:
                    return False
            for n in range(9):
                if n!=j and board[i][n]==board[i][j]:
                    return False
            for m in range(i//3*3,i//3*3+3):
                for n in range(j//3*3,j//3*3+3):
                    if m!=i and n!=j and board[m][n]==board[i][j]:
                        return False
            return True
        def f(a,b,board):
            for i in range(a,9):
                for j in range(b,9):
                    if board[i][j]=='.':
                        for c in '123456789':
                            board[i][j]=c
                            if isvaild(i,j):
                                if f(a,b,board):return True
                                else: board[i][j]='.'
                            else: board[i][j]='.'
                        return False
            return True
        f(0,0,board)
        return board
#%%
s=Solution()
# 从这里开始
print('请在下方输入数独的各个数，空格用“.”代替')
h1 = []
a1 =input("请输入第1行：")
h1.append(a1)
h1 = str(h1)

h2 = []
a2 =input("请输入第2行：")
h2.append(a2)
h2 = str(h2)

h3 = []
a3 =input("请输入第3行：")
h3.append(a3)
h3 = str(h3)

h4 = []
a4 =input("请输入第4行：")
h4.append(a4)
h4 = str(h4)

h5 = []
a5 =input("请输入第5行：")
h5.append(a5)
h5 = str(h5)

h6 = []
a6=input("请输入第6行：")
h6.append(a6)
h6 = str(h6)

h7 = []
a7 =input("请输入第7行：")
h7.append(a7)
h7 = str(h7)

h8 = []
a8 =input("请输入第8行：")
h8.append(a8)
h8 = str(h8)

h9 = []
a9 =input("请输入第9行：")
h9.append(a9)
h9 = str(h9)

wanzheng = (h1 + ',' + h2 + ',' + h3 + ',' + h4 + ',' + h5 + ',' + h6 + ',' + h7 + ',' + h8 + ',' + h9)
print(wanzheng)
# 到这里结束
board=[wanzheng]

print('计算结果为：')
#格式化输出
a=s.solveSudoku(board)
for x in range(9):
    for y in range(9):
        print(a[x][y], end="  ")
    print()