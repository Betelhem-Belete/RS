import { Injectable } from '@nestjs/common';
import { CreateUserDto } from './dto/create-user.dto';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { User } from './entities/user.entity';

@Injectable()
export class UserService {
  constructor(@InjectRepository(User)private userRepository: Repository<User>){}

  Login(createUserDto: CreateUserDto) {
    return 'This action adds a new user';
  }

  async SignUp(createUserDto: CreateUserDto) {
    const user = this.userRepository .createQueryBuilder()
    .insert()
    .into(User)
    .values([
        { email:createUserDto.email, Password: createUserDto.password },
    ])
    .execute()
   console.log(user);
   
    return `User created successfully`;
  }
} 

